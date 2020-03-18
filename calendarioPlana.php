<?php 
    include_once "..\codigosPHP\includes\headInc.html";
    
    session_start();

    if(!isset($_SESSION['idUsuario'])){
        header("location:cadastroPlana.php");
    }
?>
<section class="calendarioTela">
<div class="c-left">
        <div class="d-left">
            <div class="n-left">10</div>
            <div class="mes-left">Dez</div>
        </div>
    </div>
    
    <div class="calendario">
        <div class="data">
            <div class="mes">Jan</div>
            <div class="mes">Fev</div>
            <div class="mes">Mar</div>
            <div class="mes">Abr</div>
            <div class="mes">Mai</div>
            <div class="mes">Jun</div>
            <div class="mes">Jul</div>
            <div class="mes">Ago</div>
            <div class="mes">Set</div>
            <div class="mes">Out</div>
            <div class="mes">Nov</div>
            <div class="mes active">Dez</div>
            
            <div class="numero">1</div>
            <div class="numero">2</div>
            <div class="numero">3</div>
            <div class="numero">4</div>
            <div class="numero">5</div>
            <div class="numero">6</div>
            <div class="numero">7</div>
            <div class="numero">8</div>
            <div class="numero">9</div>
            <div class="numero">10</div>
            <div class="numero">11</div>
            <div class="numero">12</div>
            <div class="numero">13</div>
            <div class="numero">14</div>
            <div class="numero">15</div>
            <div class="numero">16</div>
            <div class="numero">17</div>
            <div class="numero">18</div>
            <div class="numero">19</div>
            <div class="numero">20</div>
            <div class="numero">21</div>
            <div class="numero">22</div>
            <div class="numero">23</div>
            <div class="numero">24</div>
            <div class="numero">25</div>
            <div class="numero">26</div>
            <div class="numero">27</div>
            <div class="numero">28</div>
            <div class="numero">29</div>
            <div class="numero">30</div>
        </div>
    </div>
</section>
 <?php 
    include_once "../codigosPHP/includes/footerInc.html";
?>