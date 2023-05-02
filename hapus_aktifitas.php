<?php

require "function.php";

if(delete($_GET["id"], 'aktifitas') > 0){
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus');
        </script>
    ";
    
}
?>