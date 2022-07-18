<?php


namespace App\Traits;


trait UploadTrait
{

    /**
     * @param $imagens = imagem ou array de imagens
     * @param $imagemColumn = Nome do campo no banco de dados
     * @param $pasta = Pasta em que deve ser salvo
     */
    private function imageUpload($imagens, $imagemColumn = null, $pasta = null){

        $uploadImagens = [];

        if (is_array($imagens)){
            foreach ($imagens as $imagem){
                $uploadImagens[] = [$imagemColumn => $imagem->store("fotos", 'public')];
            }
        } else {
            $uploadImagens = $imagens->store($pasta, 'public');
        }

        return $uploadImagens;

    }

}
