<html lang="pt-br">
    <head>
        <title>Tela|css</title>
        <style>
        .fill{
            font-family:'Segoe UI Black';
            background:-webkit-linear-gradient(left, #5ece84 , #d464d8 );
            background:linear-gradient(to right, #5ece84 , #d464d8 );
            
            -webkit-background-clip:text;
            -webkit-text-fill-color: transparent;
        }
        </style>
    </head>
<body style="background-color: #d0c1d3;">
    
    <!--Div Principal-->
    <div style="min-width:70%; min-height:85%; background-color: transparent; margin: auto; border-radius: 3%;">
        <!--Div da Esquerda (Menu Horizontal)-->
        <div style="min-width:15%;min-height:100%; background-color:#161616; border-top-left-radius:30px;border-bottom-left-radius:30px; float: left;">
            <!--Primeira Div I S2 you-->
            <div style="width:100%; height:6%; background-color:#161616; border-top-left-radius:30px; text-align: center; padding-top: 15%;">
                <span style="font-size: 16pt; font-family:'Segoe UI Black'; color: #ffffff;">I <img src="img/icons/coracao.png" width="18px"> Food</span>    
            </div>
            <br />
            
            <!--Segunda Div Foto do usuario-->
            <div style="width:100%; height: 26%; background-color:#161616; text-align: center;">   
                <img src="img/img_rosto_redondo/rosto.jpg" alt="rosto redondo" width="70px" style="border-radius: 50%;" />
                    <br /> 
                        <br /> 
                        <span style="color: #636363; font-family:futura; font-size: 14px;">Welcome,</span>
                    <br />
                <span style="font-size: 13pt; font-family:'futura'; color: #ffffff;" ><b> Sena</b></span>
            </div>
            
            <!--Terceira Div Menu do usuario horizontal-->
            <div style="width: 100%; height:27%; background-color: #161616;">
                <div style="width: 61%; height: 100%; background-color: #161616; margin: auto;">
                    <img src="img/icons/home2" width="18px" />
                        <span style="color: #636363; padding: 10px; font-family:'futura';">Home</span>
                        <br />
                        <br />
                    <img src="img/icons/caldeirao2" width="18px" /><span style="color: #636363; padding: 10px; font-family:'futura';">Categorias</span>
                        <br />
                        <br />
                    <img src="img/icons/reserva2" width="18px"><span style="color: #636363; padding: 10px; font-family:'futura';">Reservations</span>
                        <br />
                        <br />
                    <img src="img/icons/coracao2" width="18px"><span style="color: #636363; padding: 10px; font-family:'futura';">Favourites</span>
                </div>
            </div>
                
            <!--Quarta Div Maps-->
                <div style="min-width:100%; min-height: 35%; background-color:#161616; border-bottom-left-radius:30px; text-align: center;">
                    <div style="width:100%; height:; background-color: #161616; padding-top: 25px;">
                        <img src="img/icons/mapa-movel.png" alt="mapa-movel" width="210px" />
                    </div> 
                </div>
        </div>
        
        <!--Div da Direita-->
        <div style="min-width:85%; min-height:100%; background-color: #ffffff ; float: right; border-bottom-right-radius:30px; border-top-right-radius:30px;">
            <!--Div Barra de Pesquisa-->
            <div style="width:85%; height:100%; background-color:#ffffff; margin: auto;">
                <!--Div Barra de Pesquisa-->
                <div style="width:100%; height:15%; background-color:#ffffff;">
                    <!--Barra de Pesquisa-->
                            <div style="width: 50%;height:100%;background-color:#ffffff; float: left;">
                                <div id="pesquisa" style="width: 450px; height: 30px; background-color: #ffffff; border:10px; margin-top: 45px;">
                                        <img src="img/icons/search.png" alt="search" width="20px">
                                        <input type="text" style="width: 350px; height:30px; border-left: transparent; border-right: transparent; border-top: transparent; ;" placeholder="Enter you search request..." />                           
                                </div>
                            </div> 
                    
                    <!--Div do Botão do lado "GO TO PREMIUM"-->
                    <div style="width: 50%;height:100%;background-color:#ffffff; float: left;">
                            <div style="width:180px; height:100%; background-color: #ffffff; float: right;">
                                <!--Go to Premium-->
                                <div style="width: 180px; height: 35px; background-color:#161616; border-radius: 10px; margin-top: 25px; text-align: center; padding-top: 15px;">
                                <span class="fill">Go to Premium</span>
                                </div>
                            </div>
                            <!--Div do botão das setas opostas-->
                            <div style="float: right; width: 100px; height: 80px; background-color: #ffffff; text-align: center; padding-top: 37px;">             
                                <img src="img/icons/setas_opostas.png" alt="setas_opostas" width="22px"> 
                            </div>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                
                <!--Div  Titulo "Find the best place."-->
                <div style="width:100%; height:15%; background-color:#ffffff;">
                    <div style="float: left;">
                        <span style="font-size: 42px; font-family:'futura';"><b>Find the best place</b></span>
                        <br />
                        <span style="font-family:Arial, Helvetica, sans-serif"><b>249 restaurants</b>, choose yours</span>
                    </div>
                    
                    <!--Div dos Specials and Delivery-->
                    <div style="width: 200px; height: 100%; background-color: #ffffff; float: right;">
                        <div style="width:200px; height:50%; background-color: #525252; float: left; margin-top: 28px;">
                            <div style="width:100px; height:100%; background-color:#ffffff; float: left;">
                                <div style="width: 55px; height: 100%; background-color: #ffffff; margin: auto; text-align: center;"> 
                                    <b style="font-size:35px; font-family: Arial, Helvetica, sans-serif;">94</b>
                                    <br />
                                    <span style="font-family: Segoe UI Historic; font-size: 15px;">Specials</span>
                                </div>
                            </div>
                            <div style="width:99px; height:100%; background-color:#ffffff; float: right;">
                                <div style="width: 55px; height: 100%; background-color: #ffffff; margin: auto; text-align: center;"> 
                                    <b style="font-size:35px; font-family: Arial, Helvetica, sans-serif;">23</b>
                                    <br />
                                    <span style="font-family: Segoe UI Historic; font-size: 15px;">Delivery</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                
                <!--Div Menu de categorias Gastronomicas-->
                <div style="width:100%; height:15%; background-color:#ffffff;">
                    <!--Div das categorias-->
                    <div style="width: 100%; height: 80%; background-color:#ffffff;">
                            
                            <!--Categoria 1-->
                            <div style="width: 106px; height: 95px; background-color: #ffffff; ; float: left; text-align:center;">
                                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #e3dcfd; margin: auto; text-align: center;">
                                    <img src="img/icons/fatia-de-pizza.png" alt="fatia-de-pizza" width="30px" style="padding-top: 15px;" />
                                </div>
                                <br />
                                <span style="font-size: 12px;font-family:'Arial'; color: #414141;">ITALIAN</span>
                            </div>
                            
                            <!--Categoria 2-->
                            <div style="width: 107px; height: 95px; background-color: #ffffff; ; float: left; text-align: center;">
                                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #f3dcfd; margin: auto; text-align: center;">
                                    <img src="img/icons/asian-food.png" alt="fatia-de-pizza" width="30px" style="padding-top: 15px;" />
                                </div>
                                <br />
                                <span style="font-size: 12px;font-family:'Arial'; color: #414141;">ASIAN</span>
                            </div>
                            
                            <!--Categoria 3-->
                            <div style="width: 107px; height: 95px; background-color: #ffffff; ; float: left; text-align: center;">
                                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #fdecdc; margin: auto; text-align: center;">
                                    <img src="img/icons/bars.png" alt="fatia-de-pizza" width="30px" style="padding-top: 15px;">
                                </div>
                                <br />
                                <span style="font-size: 12px;font-family:'Arial'; color: #414141;">BARS</span>
                            </div>
                            
                            <!--Categoria 4-->
                            <div style="width: 107px; height: 95px; background-color: #ffffff; ; float: left; text-align: center;">
                                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #dcfde4; margin: auto; text-align: center;">
                                    <img src="img/icons/burger.png" alt="fatia-de-pizza" width="30px" style="padding-top: 15px;">
                                </div>
                                <br />
                                <span style="font-size: 12px;font-family:'Arial'; color: #414141;">BURGERS</span>
                            </div>
                            
                            <!--Categoria 5-->
                            <div style="width: 107px; height: 95px; background-color: #ffffff; ; float: left; text-align: center;">
                                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #f7fddc; margin: auto; text-align: center;">
                                    <img src="img/icons/coffee.png" alt="fatia-de-pizza" width="30px" style="padding-top: 15px;">
                                </div>
                                <br />
                                <span style="font-size: 12px;font-family:'Arial'; color: #414141;">CAFE</span>
                            </div>
                            
                            <!--Categoria 6-->
                            <div style="width: 107px; height: 95px; background-color: #ffffff; ; float: left; text-align: center;">
                                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #e9dcfd; margin: auto; text-align: center;">
                                    <img src="img/icons/pubs.png" alt="fatia-de-pizza" width="30px" style="padding-top: 15px;">
                                </div>
                                <br />
                                <span style="font-size: 12px;font-family:'Arial'; color: #414141;">PUBS</span>
                            </div>
                            
                            <!--Categoria 7-->
                            <div style="width: 107px; height: 95px; background-color: #ffffff; ; float: left; text-align: center;">
                                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #fafddc; margin: auto; text-align: center;">
                                    <img src="img/icons/vegan.png" alt="fatia-de-pizza" width="30px" style="padding-top: 15px;">
                                </div>
                                <br />
                                <span style="font-size: 12px;font-family:'Arial'; color: #414141;">VEGAN</span>
                            </div>
                            
                            <!--Categoria 8-->
                            <div style="width: 107px; height: 95px; background-color: #ffffff; ; float: left; text-align: center;">
                                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #dcfde0; margin: auto; text-align: center;">
                                    <img src="img/icons/seafood.png" alt="fatia-de-pizza" width="30px" style="padding-top: 15px;;">
                                </div>
                                <br />
                                <span style="font-size: 12px;font-family:'Arial'; color: #414141;">SEAFOOD</span>
                            </div>
                            
                            <!--Categoria 9-->
                            <div style="width: 107px; height: 95px; background-color: #ffffff; ; float: left; text-align: center;">
                                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #fadcfd; margin: auto; text-align: center;">
                                    <img src="img/icons/more.png" alt="fatia-de-pizza" width="30px" style="padding-top: 15px; ">
                                </div>
                                <br />
                                <span style="font-size: 12px;font-family:'Arial'; color: #414141;">MORE</span>
                            </div>
                        </div>  
                </div>
                
                <!--Div  do meio-->
                <div style="width:100%; height:12%; background-color:#ffffff;">
                    <!--Div do "New restaurants"-->
                    <div style="width:80%; height:100%; background-color:#ffffff; float: left;">
                        <span style="font-size: 42px; font-family:'futura';"><b>New restaurants</b></span>
                    </div>
                    <!--Div da distância-->
                    <div style="width: 20%; height: 100%; background-color: trasparent; float: right;">

                    <!--Div do forms que contem as informações de quantas repetições devem ter no conteudo-->
                        <div style="width: 100%; height: 20%; background-color: trasparent;border-radius:5px; margin: auto; text-align: center; margin-top: 20px;">
                            <form action="index.php" method="POST">
                                <input type="text" name="entrada" id="entrada" />
                                <input type="submit" value="Enviar" />
                                </form>
                        </div>
                        <!--fim da div da repetição-->
                    </div>
                    <!--fim da div-->
                    <div style= "clear: both;"></div>
                </div>

                <!--Começo do php aqui contém a programação da repetição-->
                <?php
                    $valor = 0;
                   
                    if(isset($_POST['entrada'])){
                    $valor = $_POST['entrada'];
                    } 

                    $contador = 1;
                    while($contador <= $valor){
                        $contador++;

                ?>
                <!--aqui começa a div que vai sofrer a repetição-->
                <br />
                <div style="width:100%; height:41%; background-color:trasparent; text-align: center;">
                    
                    <!--Div principal do primeiro prato-->
                    <div style="width:25%; height: 100%; background-color:transparent; float: left;">
                    <!--Div de agrupamento do primeiro prato-->
                    <div style="width:90%; height:90%; background-color:#f3dcfd; border-radius: 5%;">
                        <!--Div da imagem do prato-->
                        <div style="width:170px; height:130px; background-color: transparent; margin: auto; padding-top: 30px;"> 
                            <img src="img/img_pratos/asian_kitchen.jpg" alt="cocktail_bar" width="170px" height="100px" style="border-radius: 5%;">
                        </div>
                        <!--Div do conteudo em baixo da img do prato01-->
                        <div style="width:170px; height:60px; background-color: transparent; margin: auto;">
                                <span style="font-family: futura; font-size: 17px;"><b>Molon Lave</b></span>
                            <br />
                                <span style="font-size: 12px; font-family: Arial, Helvetica, sans-serif;">Asian Kitchen</span>
                        </div>
                    <!--Div das notas e detalhes finais-->
                    <div style="width:170px; height:60px; background-color: transparent; margin: auto;">
                        <!--Div da estrela-->
                        <div style="width: 56px; height: 60px; background-color: transparent; float: left;">
                            <div style="width: 56px; height: 25px; background-color: transparent; margin: auto; margin-top: 10px;">
                                <img src="img/icons/estrela.png" alt="estrela" width="12px">
                            </div>
                                <div style="width: 56px; height: 25px; background-color: transparent;">
                                    <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><b>4.8</b></span>
                                </div>
                        </div>
                        <!--Div do sifrão-->
                        <div style="width: 57px; height: 60px; background-color:transparent; float:left;">
                            <div style="width: 56px; height: 25px; background-color: transparent; margin: auto; margin-top: 10px;">
                                <img src="img/icons/cifrao.png" alt="cifrao" width="15px">
                            </div>
                                <div style="width: 56px; height: 25px; background-color: transparent;">
                                    <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><b>30</b></span>
                                </div>                
                        </div>
                        <!--Div do km-->
                        <div style="width: 57px; height: 60px; background-color:transparent; float: right;">
                            <div style="width: 56px; height: 25px; background-color: transparent; margin: auto; margin-top: 10px;">
                                <span style="font-size: 13px; font-family: futura;"><b>km</b></span>
                            </div>
                                <div style="width: 56px; height: 25px; background-color: transparent;">
                                    <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><b>0.2</b></span>
                                </div>
                    </div>
                    </div>
                    </div>
                    </div>
                
                <!--Div principal do segundo prato-->
                <div style="width:25%; height: 100%; background-color: transparent; float: left;">
                    <!--Div de agrupamento do primeiro prato-->
                    <div style="width:90%; height:90%; background-color: #fdecdc; margin: auto;  border-radius: 5%">
                        <!--Div da imagem do prato-->
                        <div style="width:170px; height:130px; background-color: transparent; margin: auto; padding-top: 30px;"> 
                    
                            <img src="img/img_pratos/cocktail_bar.jpg" alt="cocktail_bar" width="170px" height="100px" style="border-radius: 5%;">
                        
                            </div>
                    <!--Div do conteudo em baixo da img do prato02-->
                    <div style="width:170px; height:60px; background-color: transparent; margin: auto;">
                        <span style="font-family: futura; font-size: 17px;"><b>Lureme</b></span>
                    <br />
                    <span style="font-size: 12px; font-family: Arial, Helvetica, sans-serif;">Cocktail Bar</span>
                    </div>
                <!--Div das notas e detalhes finais-->
                <div style="width:170px; height:60px; background-color: transparent; margin: auto;">
                    <!--Div da estrela-->
                    <div style="width: 56px; height: 60px; background-color: transparent; float: left;">
                        <div style="width: 56px; height: 25px; background-color: transparent; margin: auto; margin-top: 10px;">
                            <img src="img/icons/estrela.png" alt="estrela" width="12px">
                        </div>
                        <div style="width: 56px; height: 25px; background-color: transparent;">
                            <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><b>4.8</b></span>
                        </div>
                    </div>
                    <!--Div do sifrão-->
                    <div style="width: 57px; height: 60px; background-color: transparent; float:left;">
                        <div style="width: 56px; height: 25px; background-color: transparent; margin: auto; margin-top: 10px;">
                            <img src="img/icons/cifrao.png" alt="cifrao" width="15px">
                        </div>
                        <div style="width: 56px; height: 25px; background-color: transparent;">
                            <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><b>50</b></span>
                        </div>                
                    </div>
                    <!--Div do km-->
                    <div style="width: 57px; height: 60px; background-color: transparent; float: right;">
                        <div style="width: 56px; height: 25px; background-color: transparent; margin: auto; margin-top: 10px;">
                            <span style="font-size: 13px; font-family: futura;"><b>km</b></span>
                        </div>
                        <div style="width: 56px; height: 25px; background-color: transparent;">
                            <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><b>1.2</b></span>
                        </div>
                    </div>   
                </div>
                    </div>
                </div>
                
                <!--Div principal do terceiro prato-->
                <div style="width:25%; height: 100%; background-color:transparent; float: left;">
                    <!--Div de agrupamento do primeiro prato-->
                    <div style="width:90%; height:90%; background-color: #dcfdf3; margin: auto;  border-radius: 5%">
                            <!--Div da imagem do prato-->
                            <div style="width:170px; height:130px; background-color: transparent; margin: auto; padding-top: 30px;"> 
                                <img src="img/img_pratos/seafood.jpg" alt="cocktail_bar" width="170px" height="100px" style="border-radius: 5%;">
                            </div>
                        <!--Div do conteudo em baixo da img do prato03-->
                        <div style="width:170px; height:60px; background-color: transparent; margin: auto;">
                            <span style="font-family: futura; font-size: 17px;"><b>Boston Seafood</b></span>
                            <br />
                            <span style="font-size: 12px; font-family: Arial, Helvetica, sans-serif;">Seafood</span>
                        </div>
                        <!--Div das notas e detalhes finais-->
                        <div style="width:170px; height:60px; background-color: transparent; margin: auto;">
                            <!--Div da estrela-->
                            <div style="width: 56px; height: 60px; background-color: transparent; float: left;">
                                <div style="width: 56px; height: 25px; background-color: transparent; margin: auto; margin-top: 10px;">
                                    <img src="img/icons/estrela.png" alt="estrela" width="12px">
                                </div>
                                <div style="width: 56px; height: 25px; background-color: transparent;">
                                    <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><b>3.9</b></span>
                                </div>
                            </div>
                            <!--Div do sifrão-->
                            <div style="width: 57px; height: 60px; background-color: transparent; float:left;">
                                <div style="width: 56px; height: 25px; background-color: transparent; margin: auto; margin-top: 10px;">
                                    <img src="img/icons/cifrao.png" alt="cifrao" width="15px">
                                </div>
                                <div style="width: 56px; height: 25px; background-color: transparent;">
                                    <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><b>89</b></span>
                                </div>                
                            </div>
                            <!--Div do km-->
                            <div style="width: 57px; height: 60px; background-color: transparent; float: right;">
                                <div style="width: 56px; height: 25px; background-color: transparent; margin: auto; margin-top: 10px;">
                                    <span style="font-size: 13px; font-family: futura;"><b>km</b></span>
                                </div>
                                <div style="width: 56px; height: 25px; background-color: transparent;">
                                    <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><b>3.1</b></span>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
                
                <!--Div principal do Quarto prato-->
                <div style="width:25%; height: 100%; background-color: transparent; float: left;">
                    <!--Div de agrupamento do primeiro prato-->
                    <div style="width:90%; height:90%; background-color: #f4fddc; float: right;  border-radius: 5%">
                        <!--Div da imagem do prato-->
                        <div style="width:170px; height:130px; background-color: transparent; margin: auto; padding-top: 30px;"> 
                            <img src="img/img_pratos/vegan.jpeg" alt="cocktail_bar" width="170px" height="100px" style="border-radius: 5%;">
                        </div>
                        <!--Div do conteudo em baixo da img do prato04-->
                        <div style="width:170px; height:60px; background-color: transparent; margin: auto;">
                            <span style="font-family: futura; font-size: 17px;"><b>Powerhouse</b></span>
                            <br /> 
                            <span style="font-size: 12px; font-family: Arial, Helvetica, sans-serif;">Vegan</span>
                        </div>
                        <!--Div das notas e detalhes finais-->
                        <div style="width:170px; height:60px; background-color: transparent; margin: auto;">
                            <!--Div da estrela-->
                            <div style="width: 56px; height: 60px; background-color: transparent; float: left;">
                                <div style="width: 56px; height: 25px; background-color: transparent; margin: auto; margin-top: 10px;">
                                    <img src="img/icons/estrela.png" alt="estrela" width="12px">
                                </div>
                                <div style="width: 56px; height: 25px; background-color: transparent;">
                                    <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><b>4.2</b></span>
                                </div>
                            </div>
                            <!--Div do sifrão-->
                            <div style="width: 57px; height: 60px; background-color: transparent; float:left;">
                                <div style="width: 56px; height: 25px; background-color: transparent; margin: auto; margin-top: 10px;">
                                    <img src="img/icons/cifrao.png" alt="cifrao" width="15px">
                                </div>
                                <div style="width: 56px; height: 25px; background-color: transparent;">
                                    <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><b>28</b></span>
                                </div>                
                            </div>
                                <!--Div do km-->
                                <div style="width: 57px; height: 60px; background-color: transparent; float: right;">
                                    <div style="width: 56px; height: 25px; background-color: transparent; margin: auto; margin-top: 10px;">
                                        <span style="font-size: 13px; font-family: futura;"><b>km</b></span>
                                    </div>
                                    <div style="width: 56px; height: 25px; background-color: transparent;">
                                        <span style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"><b>0.6</b></span>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div style="clear: both;"></div>
                </div>
                <!--Abro o php novamente para adicionar o fechamentodo while e dar um <br />-->        
                <?php
                    echo'<br />';
                }
                ?>
            </div>
        </div>
            <div style="clear: both;"></div>
    </div>
</body>
</html>