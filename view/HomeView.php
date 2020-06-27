
<?php $title='Home Page';?>
<?php ob_start()?>
<div class="container-fluid">
    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-stars" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                            <path d="M2.242 2.194a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.256-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53z"/>
                        </svg> Nos nouveaux livres:</h5>

                </div>
            </div>

            <div id="carouselExampleControls" class="carousel shadow slide  bg-secondary" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <div class="container d-flex justify-content-around">
                            <a href="#" class="text-light"><img src="../img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                                <h6 class="text-center ">julia s'story</h6></a>
                            <a href="#" class="text-light"><img src="../img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                                <h6 class="text-center ">julia s'story</h6></a>
                            <a href="#" class="text-light"><img src="../img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                                <h6 class="text-center ">julia s'story</h6></a>
                            <a href="#" class="text-light"><img src="../img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                                <h6 class="text-center ">julia s'story</h6></a>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="container d-flex justify-content-around">
                            <a href="#" class="text-light"><img src="../img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                                <h6 class="text-center ">julia s'story</h6></a>
                            <a href="#" class="text-light"><img src="../img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                                <h6 class="text-center ">julia s'story</h6></a>
                            <a href="#" class="text-light"><img src="../img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                                <h6 class="text-center ">julia s'story</h6></a>
                            <a href="#" class="text-light"><img src="../img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                                <h6 class="text-center ">julia s'story</h6></a>
                        </div>
                    </div>


                    <div class="carousel-item ">
                        <div class="container d-flex justify-content-around">
                            <a href="#" class="text-light"><img src="../img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                                <h6 class="text-center ">julia s'story</h6></a>
                            <a href="#" class="text-light"><img src="../img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                                <h6 class="text-center ">julia s'story</h6></a>
                            <a href="#" class="text-light"><img src="../img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                                <h6 class="text-center ">julia s'story</h6></a>
                            <a href="#" class="text-light"><img src="../img/books/julia.jpg" class="book-cover img-thumbnail"  alt="julia">
                                <h6 class="text-center ">julia s'story</h6></a>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>







</div>
<?php $content=ob_get_clean();?>

<?php

if(isset($_SESSION['id']) and $_SESSION['id']!=NULL){
require('TemplateLoggedIn.php');
}else{
require('templateNotLoggedIn.php');

}