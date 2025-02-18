A função que vou ensinar abaixo deve ser inserida no final do arquivo functions.php do seu tema WordPress.

Por padrão, você vai encontrar o arquivo functions.php dentro da pasta do seu tema, no caminho: wp-content/themes/seutema/functions.php

Cada iten abaixo está com o comentário no final informando qual campo a função vai remover. Exclua as linhas que deseja manter.

/**************************************************************************************/
REMOVER OPÇÕES DO CARRINHO DO WOOCOMMERCE
/**************************************************************************************/


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
unset($fields['billing']['billing_first_name']); //remover primeiro nome
unset($fields['billing']['billing_last_name']); //remover sobrenome
unset($fields['billing']['billing_company']); //remover empresa
unset($fields['billing']['billing_address_1']); //remover endereço 1
unset($fields['billing']['billing_address_2']); //remover endereço 2
unset($fields['billing']['billing_city']); //remover cidade
unset($fields['billing']['billing_postcode']); //remover cep
unset($fields['billing']['billing_country']); //remover país
unset($fields['billing']['billing_state']); //remover estado
unset($fields['billing']['billing_phone']); //remover telefone
unset($fields['order']['order_comments']); //remover comentários do pedido / compra
unset($fields['billing']['billing_email']); //remover email
unset($fields['billing']['billing_city']); //remover cidade
return $fields;
}
