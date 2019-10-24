<?php require_once('views/layouts/header.php') ?>
<body>



    <div class="ui stackable center aligned container mg-40-top-bottom grid">

            <?php if(isset($_REQUEST['error'])){ ?>
                <div id="entrada" class="ui red message">
                    <i class="x large icon"></i>    
                    ¡El usuario y/o correo que ingresaste son incorrectos!
                </div>
            <?php } ?>

        <div class="row">
            <div class="eight wide column">
                <img src="assets/img/ico00.png" alt="" width="20%">
            </div>
        </div>
        <div class="row">
            <div class="eight wide column">
                <div class="ui segment">
                    <div class="ui  icon">
                        <i class="user huge olive icon"></i>
                    </div>
                    <div class="ui divider"></div>
                    <form action="?class=Login&view=auth" method="post">
                        <div class="ui left icon huge fluid mg-20-top-bottom input">
                            <input type="email" name="correo" placeholder="Correo" required>
                            <i class="mail icon"></i>
                        </div>

                        <div class="ui left icon huge fluid mg-20-top-bottom input">
                            <input type="password" name="contra" placeholder="Contraseña" required>
                            <i class="lock  icon"></i>
                        </div>

                        <button class="ui olive huge button">
                            Entrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>