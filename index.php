<?php get_header();?>

    <main>
      <section class="hero img_bg">
        <div class="container">
          <h2>What is 【SUNA】?</h2>
          <p>エンジニア【すな】のポートフォリオサイト</p>
          <a href="#prof">
            <div class="next_skip">
              <p>Check Profile</p>
            </div>
          </a>
          
          <div class="para_box"></div>
        </div>
      </section>


      <div class="main_wrap">
        <section id="prof">
          <div class="container">
            <h2>PROFILE</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/prof.jpg" alt="すな自画像">
            <table>
              <tr>
                <th>2010年</th>
                <td>情報系大学を卒業</td>
              </tr>
              <tr>
                <th>2011年</th>
                <td>中小SIerに就職。大手ベンダーに在中して5年間、業務系システム開発に従事</td>
              </tr>
              <tr>
                <th>2016年</th>
                <td>結婚・出産を機に退職</td>
              </tr>
              <tr>
                <th>2017年</th>
                <td>IT業界とは無縁の事務職に就く</td>
              </tr>
              <tr>
                <th>2020年</th>
                <td>やっぱりエンジニアやりたい！子育てしながら働くフリーランスエンジニアへ転身</td>
              </tr>
            </table>
            
            <div class="prof_etc">
              <p>好き<i class="fas fa-caret-right icon"></i>寒い日に羽毛布団に包まれて眠ること。漫画。辛すぎない麻婆茄子。</p>
              <p>苦手<i class="fas fa-caret-right icon"></i>虫。行列。</p>
            </div>

            <a href="#skill">
              <div class="next_skip disable">
                <p>Check Skill</p>
              </div>
            </a>

          </div>
        </section>

        <section id="skill">
          <div class="container">
            <h2>SKILLS</h2>
            <table>
              <thead>
                <tr>
                  <th>言語</th>
                  <th>実務経験</th>
                  <th>メモ</th>
                </tr>
              </thead>
                <tr>
                  <td>C</td>
                  <td>半年</td>
                  <td>
                    <a href="/category/programming/c/">
                      <i class="fas fa-pencil-alt"></i></i>
                      <?php echo cnt_post_by_categorie( 'c' ); ?>
                  </a>
                  </td>
                </tr>
                <tr>
                  <td>java</td>
                  <td>5年</td>
                  <td>
                    <a href="/category/programming/java/">
                      <i class="fas fa-pencil-alt"></i></i>
                      <?php echo cnt_post_by_categorie( 'java' ); ?>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>sql</td>
                  <td>5年</td>
                  <td><a href="/category/programming/sql/">
                      <i class="fas fa-pencil-alt"></i></i>
                      <?php echo cnt_post_by_categorie( 'sql' ); ?>
                  </a></td>
                </tr>
                <tr>
                  <td>html/css</td>
                  <td>1年</td>
                  <td><a href="/category/programming/html-css/">
                    <i class="fas fa-pencil-alt"></i></i>
                      <?php echo cnt_post_by_categorie( 'html-css' ); ?>
                  </a></td>
                </tr>
                <tr>
                  <td>javascript</td>
                  <td>1年</td>
                  <td><a href="/category/programming/javascript-jquery/">
                    <i class="fas fa-pencil-alt"></i></i>
                      <?php echo cnt_post_by_categorie( 'javascript-jquery' ); ?>
                  </a></td>
                </tr>
                <tr>
                  <td>php</td>
                  <td>なし</td>
                  <td><a href="/category/programming/php/">
                    <i class="fas fa-pencil-alt"></i></i>
                      <?php echo cnt_post_by_categorie( 'php' ); ?>
                  </a></td>
                </tr>
                <tr>
                  <td>wordpress</td>
                  <td>なし</td>
                  <td><a href="/category/programming/wordpress/">
                    <i class="fas fa-pencil-alt"></i></i>
                      <?php echo cnt_post_by_categorie( 'wordpress' ); ?>
                  </a></td>
                </tr>
                <tr>
                  <td>photoshop</td>
                  <td>なし</td>
                  <td><a href="/category/programming/photoshop/">
                    <i class="fas fa-pencil-alt"></i></i>
                      <?php echo cnt_post_by_categorie( 'photoshop' ); ?>
                  </a></td>
                </tr>
                </thead>
            </table>

            <img src="">

            <a href="#text-2">
              <div class="next_skip disable">
                <p>Please contact me!</p>
              </div>
            </a>

          </div>
        </section>

      </div>
    </main>


    <section id="portfolio">
      <div class="container">
        <h2>PORTFOLIO</h2>
        <div class="slider">

<?php
  $arg = array( 
  'category' => 34,
  'posts_per_page' => 5 //表示記事件数
  );
  $posts = get_posts($arg);
?>
<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
          <div><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></div>
<?php endforeach; endif; ?>

        </div>
      </div>
    </section>

<?php get_sidebar();?>
<?php get_footer();?>