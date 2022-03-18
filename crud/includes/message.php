<?php
//sessao
session_start();

session_unset();

if(isset($_SESSION['mensagem'])){?>
    <<script>
        $window.onload = function(){
            M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
        };
    </script>
<?php }?>