<?php 

  $hierarquia = array(
    array(
      'nome_cargo' => 'CEO',
      'subordinados' => array(
        //início: diretor comercial
        array(
          'nome_cargo' => 'Diretor Comercial',
          'subordinados' => array(
            //início: Gerente de vendas
            array(
              'nome_cargo' => 'Gerente de vendas'
            )
            //termino: Gerente de vendas
          )
        ),
        //termino: diretor comercial
        //início: diretor financeiro
        array(
          'nome_cargo' => 'Diretor Financeiro',
          'subordinados' => array(
            //inicio: gerente de contas a pagar
            array(
              'nome_cargo' => 'Gerente de contas a pagar',
              'subordinados' => array(
                //inicio: supervisor de contas a pagar
                array(
                  'nome_cargo' => 'supervisor de contas a pagar'
                )
                //inicio: supervisor de contas a pagar
              )
            ),
            //termino: gerente de contas a pagar
            //inicio: Gerente de compras
            array(
              'nome_cargo' => 'Gerente de compras',
              'subordinados' => array(
                //inicio: supervisor de suprimentos
                array(
                  'nome_cargo' => 'supervisor de suprimentos'
                )
                //termino: supervisor de suprimentos
              )
            )
            //termino: gerente de compras
          )
        )
        //termino: diretor financeiro
      )
    )
  );

  function show($cargos){
    $html = "<ul>";

      foreach($cargos as $cargo){
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
          $html .= show($cargo['subordinados']);
        }

        $html .= "</li>";

      }

    $html .= "</ul>";

    return $html;
  }

  echo show($hierarquia);

?>