<style>
    .shelf
    {
        width:auto;
        height:15px;
        background-image: url("<?=URL?>images/bookshelf_texture.png");
        background-repeat: repeat;
        position: fixed;


    }

    .book
    {
        width: 50px;
        height: 100px;
        background-image: url("<?=URL?>images/book.jpg");
        background-size: 50px 100px;
        margin-right: 30px;
        display: inline-block;
    }

    .book:hover{
        background-size: 75px 125px;
        width: 75px;
        height: 125px;
        //margin-left: -25px;
        //margin-right: -25px;

        -webkit-transition:  1s; /* Safari and Chrome */

    }

</style>
<script>


</script>

<div class="container">
    <div class="row">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br/>
            <br/>
            <br/>
            <br/>
            <div class="book"></div>
            <div class="book"></div>
            <div class="book"></div>


            <div class="shelf">

            </div>

        </div>
        <div class="col-md-2"></div>



    </div>

</div>