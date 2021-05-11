<?php get_header() ?>
    <!-- header -->
    <header class="mainHeader d-flex justify-content-center flex-column align-items-center">
        <h4>Добро дошли на наш сајт</h4>
        <h1>Удружење "Радост стварања"</h1>
        <p class="lead">Кроз игру, машту, стваралаштво стварамо бољи свет.</p>
        <div class="buttons">
            <a href="" class="btn btn-danger mr-30">O nama</a>
            <a href="" class="btn btn-outline-light ml-3">Festivali</a>
        </div>
    </header>
    <!-- o nama -->
    <section class="onama container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="img/uvod.jpg" alt="">
            </div>
            <div class="col-md-7">
                <h2>О нама</h2>
                <p>Нестраначко, невладино и непрофитно удружење за децу и омладину- кроз игру, машту и стваралаштво, стварамо бољи свет!</p>
                <p>Удружење „Радост стварања“ основано је ради остваривања циљева како у области културе живљења, бриге о деци и омладини, тако и у области развијања свести о традицији и историји. Циљ је подстицање тражења смисла живота и грађења целовите личности; подстицање саосећања и поштовања међу људима, и развијања здравог начина живљења међу младима.</p>
            </div>
        </div>
    </section>

    <!--brojac-->
    <section class="brojac">
        <div class="container">
            <article>
                <h2>6</h2>
                <p class="lead">Фестивала</p>
            </article>
            <article>
                <h2>4</h2>
                <p class="lead">Представа</p>
            </article>
            <article>
                <h2>1200</h2>
                <p class="lead">Гледалаца</p>
            </article>
            <article>
                <h2>16</h2>
                <p class="lead">Награда</p>
            </article>
        </div>
    </section>

<!-- blog -->
    <section class="blog">
        <div class="container">
            <h2>Блог</h2>
            <p class="lead">Пратите наше новости</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="post">
                        <div class="featured-image">
                            <img src="<?php echo_url(get_template_directory_uri(); ?>/img/blog1.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Prvi blog</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit soluta dicta voluptas, nihil, exercitationem ex illo voluptatum eaque dolor explicabo fugit porro ea, ab quia neque accusamus. Molestiae laboriosam, autem blanditiis esse corrupti odit inventore, et quod similique sint qui quos voluptatem accusantium tempore fugit suscipit reiciendis id culpa eligendi.</p>
                            <a href="">Ceo tekst</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post">
                        <div class="featured-image">
                            <img src="<?php echo_url(get_template_directory_uri(); ?>/img/blog1.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Drugi blog</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit soluta dicta voluptas, nihil, exercitationem ex illo voluptatum eaque dolor explicabo fugit porro ea, ab quia neque accusamus. Molestiae laboriosam, autem blanditiis esse corrupti odit inventore, et quod similique sint qui quos voluptatem accusantium tempore fugit suscipit reiciendis id culpa eligendi.</p>
                            <a href="">Ceo tekst</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post">
                        <div class="featured-image">
                            <img src="<?php echo_url(get_template_directory_uri(); ?>/img/blog1.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Treci blog</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit soluta dicta voluptas, nihil, exercitationem ex illo voluptatum eaque dolor explicabo fugit porro ea, ab quia neque accusamus. Molestiae laboriosam, autem blanditiis esse corrupti odit inventore, et quod similique sint qui quos voluptatem accusantium tempore fugit suscipit reiciendis id culpa eligendi.</p>
                            <a href="">Ceo tekst</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

