function scripts_jquery(){

            

    url_sticky = "img/gif.gif";
    url_travolta = "img/travolta.gif";
    url_dance = "img/dance.gif";
    $(".a-quarto-jquery img").hide();

    //EFEITO DE MUDAR A COR
    $(".a-segundo-jquery").click(function(){
        cclock = setInterval(mudarRGB, 500); //https://www.w3schools.com/jsref/met_win_setinterval.asp //cclocl = color clock
        max = 255;
        min = 0;
        function mudarRGB(){

            //FUNÇÕES PARA GERAR NÚMEROS ALEATÓRIOS CONSIDERANDO UM INTERVALO DEFINIDO //entre 0 e 255
            red_function = function getRandomArbitrary(min, max) { return Math.random() * (max - min) + min; }
            green_function = function getRandomArbitrary(min, max) { return Math.random() * (max - min) + min; } 
            blue_function = function getRandomArbitrary(min, max) { return Math.random() * (max - min) + min; }
            
            valor_red = red_function(min, max);
            valor_green = red_function(min, max);
            valor_blue = red_function(min, max);

            aplicarRGB(valor_red, valor_green, valor_blue);
            function aplicarRGB(red, green, blue){
                $(".s-segundo-jquery").css("background-color", `rgb(${valor_red}, ${valor_green}, ${valor_blue}`); //RGB VALORES VARIÁVEIS 0/255
                console.log("RGB aplicado");
            }
             
        }        
    });

    //GIF STICKY
    $("#icon_play").click(function(){
        $(".a-terceiro-jquery").css('background-image', 'url(' + url_sticky + ')');
    });

    //EFEITO DE DESLOCAR A SECTION
    $("#icon_move").click(function(){
        console.log('Animação ativada');

        //CONFIGURAÇÕES DA PRIMEIRA ANIMAÇÃO
        transY = 0;
        fclock = setInterval(primeiro_mov, 50); //fclock = first clock
        function primeiro_mov(){
            console.log("up move");
            transY -= 20;
            $(".sprimeiro-jquery").css("transform", `translateY(${transY}px)`);
            console.log(transY);
            if(transY <= -600){ //Se a posição, em Y, atingir este valor
                clearInterval(fclock); //Parar o processo, pois já estará fora do campo de visão
                console.log("section parou");

                //RESET DA POSIÇÃO DE PARTIDA
                //Configurações para que a section retorne para a posição inicial, vindo da esquerda para a direita
                transY = 0;
                transX = - 800;
                section = window.document.querySelector(".sprimeiro-jquery");
                section.style.transform = `translateX(${transX}px, ${transY}px)`; //translateX(-2500px)

                //CONFIGURAÇÕES DA ANIMAÇÃO DO TRAVOLTA
                console.log('Travolta begins');
                last_section = false;
                $(".a-quarto-jquery i").fadeOut(3000);
                setTimeout(show_travolta, 3000);
                function show_travolta(){
                    $(".a-quarto-jquery #gif_travolta").fadeIn(1000);
                }
                setTimeout(hide_travolta, 10000);
                function hide_travolta(){
                    $(".a-quarto-jquery #gif_travolta").fadeOut(2000);
                    setTimeout(voltar_Icone, 2000);
                    function voltar_Icone(){
                        $(".a-quarto-jquery i").fadeIn(2000);
                        last_section = true; //Condição para funcionalidade da última section
                        console.log("A última section permite interação, agora");
                    }
                    
                }

                //ÚLTIMA SECTION //ANIMAÇÃO PARA RETORNAR A PRIMEIRA SECTION
                $("#icon_back").click(function(){
                    if(last_section){
                        console.log('Animação ativada');
                        console.log("Valor eixo X igual a :" + transX + ", e o valor do eixo Y é igual a: " + transY);
                        sclock = setInterval(voltar_Section, 50);
                        function voltar_Section(){
                            transX += 10;
                            $(".sprimeiro-jquery").css("transform", `translateX(${transX}px)`);
                            console.log(transX);
                            if(transX >= 0){
                                console.log("Valor para o eixo X atingido");
                                clearInterval(sclock);
                                last_section = false; //Para que não seja interagível após

                                //ANIMAÇÃO DANCE
                                console.log("Chaggy Carl begins");
                                $(".a-quarto-jquery i").fadeOut(3000);
                                setTimeout(show_dance, 3000);
                                function show_dance(){
                                    $(".a-quarto-jquery #gif_dance").fadeIn(1000);
                                }
                                setTimeout(hide_dance, 10000);
                                function hide_dance(){
                                    $(".a-quarto-jquery #gif_dance").fadeOut(2000);
                                    setTimeout(voltar_icon, 2000);
                                    function voltar_icon(){
                                        $(".a-quarto-jquery i").fadeIn(2000);
                                    }
                                }
                            }
                        }
              
                    }
                    
                });

            }
        }
    }); 
    
                       
}