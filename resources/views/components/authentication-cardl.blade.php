
<style>
    .bgsignin {
    background-image: url('../assets/bgsignin.svg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
}
</style>


<div class=bgsignin>
<div style="display: flex;
justify-content: center;
">

        {{ $logo }}
    </div>
    <p style="text-align: center">
        <span>S</span>ign in</p>
    <div style="display: flex;
    justify-content: center;margin-top:20px">

        {{ $slot }}
    </div>
</div>
