
<style>
    .btn:hover {
    border:#5B06E5 1px dashed !important;
    background-color: #fff !important;
    color:#5B06E5 !important;
    font-family: kavoon;
    transform: translateY(-10%);
    filter: drop-shadow(0 0 2em #5B06E5);
}
</style>


<button class="btn" {{ $attributes->merge(['type' => 'submit']) }} style="text-align: center;
    border: 1px groove;
    padding:8px 50px;
    border-radius: 20px;
    margin: auto;
    display: block;
    color:#fff;
    background-color: #5B06E5;
    font-family: kavoon;
    transition: all 0.3s ease-in-out;
    font-size: 20px;
    filter: drop-shadow(0 0 1em #5B06E5);
    width:300px;">
    {{ $slot }}
</button>
