<? $this->load->view('inc/header');?>

<div class="container">
    <div class="page-header">
        <div class="navbar pull-right">
            <div class="navbar-inner ">
                <? $this->load->view('inc/navigation');?>
            </div>
        </div>
        <? $this->load->view('inc/logo'); ?>
    </div>
    <div style="padding:15px 280px;" class="content">
        <h1  class="head">Регистрация</h1> 
        <h2 class="head">Компания  «Простое решение» это:</h2> 
        <form class="form-signin">
            <h2 class="form-signin-heading">Вход в кабинет</h2>
            <input type="text" class="input-block-level" placeholder="Email address">
            <input type="password" class="input-block-level" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        </form>
    </div>
</div>

<? $this->load->view('inc/footer');         