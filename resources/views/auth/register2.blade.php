<div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Welcome to Caesar's Web, Please Register</h1>
    </header>
    
    <form class="form">
        <form method="POST" action="{{ route('register') }}">
            <div class="form__group">
                <label id="name" input type="text" placeholder="Username" class="form__input" />
            </div>
        
            <div class="form__group">
                <label id="email" input type="email" placeholder="Email" class="form__input" />
            </div>
        
            <div class="form__group">
                <label id="password" input type="password" placeholder="Password" class="form__input" />
            </div>
        
            <button class="btn" type="button">Register</button>
    </form>
</div>