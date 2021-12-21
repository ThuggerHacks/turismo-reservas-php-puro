
        <footer><!------------inicio de rodape--------->
            <div class="footer-container">
                <div class="footer-nav"><!----------footer-nav------>
                    <ul class="footer-nav-ul" type="circle">
                        <li class="footer-nav-li">
                            <div class="footer-chevron-right">&gt;</div>
                            <a class="footer-link" href="../index.php">IR PARA O INICIO</a>
                        </li>
                       
                        <li class="footer-nav-li">
                            <div class="footer-chevron-right">&gt;</div>
                            <a class="footer-link" href="../pages/excursao.php">EXCURS&Otilde;ES</a>
                        </li>
                        <?php
                            if(!isset($_SESSION['email']) || $_SESSION['email']=="anonymous"):
                        ?>
                        <li class="footer-nav-li">
                            <div class="footer-chevron-right">&gt;</div>
                            <a class="footer-link" href="login.php">LOGIN</a>
                        </li>
                        <?php
                            else:
                        ?>
                            <li class="footer-nav-li">
                                <div class="footer-chevron-right">&gt;</div>
                                <a class="footer-link" href="login.php?a=1">SAIR</a>
                            </li>
                                
                        <?php
                            endif;
                        ?>
                    </ul>
                </div><!------------footer-nav----------->
                <div class="card-container"><!--------------card-1--------------->
                    <h1 class="footer-title"><i>Os locais mais visitados</i></h1>
                    <div class="cards"><!------------cards container---------->
                        <div class="footer-card-1"><!----card-1------------->
                             <img src="../assets/images/5.jpg" />
                             <div class="card-text"><!-------------card-1-text-------------------->
                                <h3>AFRICA DO SUL</h3><br>
                                <p>
                                    alguma informacao aqui
                                    alguma informacao aqui
                                    alguma informacao aqui
                                    alguma informacao aqui
                                    alguma informacao aqui
                                </p>
                             </div><!---------------end card-1---text------------>
                            
                        </div><!----------------end card-1--------------->
                        <div class="footer-card-2 footer-card-1"><!-----------------card-2------------>
                            <img src="../assets/images/5.jpg"/>
                                <div  class="card-text"><!-------------card-1-text-------------------->
                                    <h3>JAP&Atilde;O</h3><br>
                                    <p>
                                        alguma informacao aqui
                                        alguma informacao aqui
                                        alguma informacao aqui
                                        alguma informacao aqui
                                        alguma informacao aqui
                                    </p>
                                </div><!---------------end card-1---text------------>
                        </div><!-----------end card-2-------------------------->
                    </div><!-------------cards end-------------------->
                     
                </div><!------------------------card-1 ends---------------------->
               
            </div>
            <div class="divider"></div><!-----linha divisora----------->
            <div class="footer"><!-----------------informacao------------------->
                <div>WEBSITE TURISMO</div>
                <div class="footer-social">
                    <a href="#">facebook</a> | 
                    <a href="#">Twitter</a>
                </div>
              
            </div><!-----------------informacao------------------->
        </footer><!---------fim do rodape----------->

        <script src="../assets/javascript/header.js"></script>
    </body>
</html>    
