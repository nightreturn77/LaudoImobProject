$(function(){
    $('#esp').change(function(){
    var tipo = $('#esp').val();
    

if(tipo == 1){ 
    $('#especificacao1').text("Linear");
    $('#especificacao1').val("Linear");
    $('#especificacao2').text("Frente");
    $('#especificacao2').val("Frente");
    $('#especificacao3').text("Duplex");
    $('#especificacao3').val("Duplex");
    $('#especificacao4').text("Vila");
    $('#especificacao4').val("Vila");
    $('#especificacao5').text("Triplex");
    $('#especificacao5').val("Triplex");
    $('#especificacao6').text("Cond");
    $('#especificacao6').val("Cond");
    $('#especificacao4').fadeIn();
    $('#especificacao5').fadeIn();
    $('#especificacao3').fadeIn();

    

}else if(tipo ==2){
    $('#especificacao1').text("Padrão");
    $('#especificacao1').val("Padrão");
    $('#especificacao2').text("Duplex");
    $('#especificacao2').val("Duplex");
    $('#especificacao6').text("Cobertura");
    $('#especificacao6').val("Cobertura");
    $('#especificacao4').fadeOut();
    $('#especificacao5').fadeOut();
    $('#especificacao3').fadeOut();

}else if(tipo ==3){ 
    $('#especificacao1').text("Uni - Familiar");
    $('#especificacao1').val("Uni - Familiar");
    $('#especificacao2').text("Bi - Familiar");
    $('#especificacao2').val("Bi - Familiar");
    $('#especificacao6').text("Multi - Familiar");
    $('#especificacao6').val("Multi - Familiar");
    $('#especificacao4').fadeOut();
    $('#especificacao5').fadeOut();
    $('#especificacao3').fadeOut();

}else if(tipo == 4){ 
    $('#especificacao1').text("Frente");
    $('#especificacao1').val("Frente");
    $('#especificacao2').text("Jirau");
    $('#especificacao2').val("Jirau");
    $('#especificacao3').text("Galeria");
    $('#especificacao3').val("Galeria");
    $('#especificacao4').text("Loja");
    $('#especificacao4').val("Loja");
    $('#especificacao5').text("Sala");
    $('#especificacao5').val("Sala");
    $('#especificacao6').text("Galpão");
    $('#especificacao6').val("Galpão");
    $('#especificacao4').fadeIn();
    $('#especificacao5').fadeIn();
    $('#especificacao3').fadeIn();

}


    });



    
    





});


