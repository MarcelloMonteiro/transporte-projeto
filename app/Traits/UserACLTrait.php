<?php


namespace App\Traits;

trait UserACLTrait
{

    public function permissoes(): array
    {

        $permissoes = $this->permissoesPerfil();
        /*
        $permissoesCargo = $this->permissoesCargo();

        $permissoes = [];
        foreach ($permissoesCargo as $permissao){
            if (in_array($permissao, $permissoesPlano))
                array_push($permissoes, $permissao);
        }
        */
        return $permissoes;

    }

    public function permissoesPerfil(): array
    {
        $tenant = Tenant::with('plano.perfis.permissoes')->where('id', $this->tenant_id)->first();
        $plano = $tenant->plano;

        $permissoes = [];
        foreach ($plano->perfis as $perfil){
            foreach ($perfil->permissoes as $permissao){
                array_push($permissoes, $permissao->permissao);
            }
        }
        return $permissoes;
    }

    public function permissoesCargo(): array
    {
        $roles = $this->cargos()->with('permissoes')->get();
        $permissoes = [];
        foreach ($roles as $role){
            foreach ($role->permissoes as $permissao){
                array_push($permissoes, $permissao->permissao);
            }
        }
        return $permissoes;
    }

    public function hasPermission(string $permissaoNome): bool
    {
        return in_array($permissaoNome, $this->permissoes());
    }

    public function isAdmin(): bool
    {
        return in_array($this->email, config('acl.admins'));
    }

    public function isTenant(): bool
    {
        return !in_array($this->email, config('acl.admins'));
    }

}
