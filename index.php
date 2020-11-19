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
                  <th></th>
                  <th>実務経験</th>
                  <th>メモ</th>
                </tr>
              </thead>
                <tr>
                  <td>C</td>
                  <td>★☆☆</td>
                  <td>半年</td>
                  <td>
                    <a href="/category/programming/c/">
                      <i class="fas fa-pencil-alt"></i></i>
                      <!-- <?php echo count(get_categories( array('include' => '13') )); ?> -->
                      <?php echo count_category(13); ?>
                  </a>
                  </td>
                </tr>
                <tr>
                  <td>java</td>
                  <td>★★☆</td>
                  <td>5年</td>
                  <td>
                    <a href="/category/programming/java/">
                      <i class="fas fa-pencil-alt"></i></i>
                      <?php echo count(get_categories( array('include' => '14') )); ?>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>sql</td>
                  <td>★★☆</td>
                  <td>5年</td>
                  <td><a href="/category/programming/sql/">
                      <i class="fas fa-pencil-alt"></i></i>
                      <?php echo count(get_categories( array('include' => '16') )); ?>
                  </a></td>
                </tr>
                <tr>
                  <td>html/css</td>
                  <td>★☆☆</td>
                  <td>1年</td>
                  <td><a href="/category/programming/css/">
                    <i class="fas fa-pencil-alt"></i></i>
                    <!-- <?php echo count(get_categories( array('include' => '12') )); ?> -->
                    <?php echo count_category(12); ?>
                  </a></td>
                </tr>
                <tr>
                  <td>javascript</td>
                  <td>★☆☆</td>
                  <td>1年</td>
                  <td><a href="/category/programming/js/">
                    <i class="fas fa-pencil-alt"></i></i>
                    <?php echo count(get_categories( array('include' => '15') )); ?>
                  </a></td>
                </tr>
                <tr>
                  <td>php</td>
                  <td>★☆☆</td>
                  <td>なし</td>
                  <td><a href="/category/programming/php/">
                    <i class="fas fa-pencil-alt"></i></i>
                    <?php echo count(get_categories( array('include' => '17') )); ?>
                  </a></td>
                </tr>
                <tr>
                  <td>wordpress</td>
                  <td>★☆☆</td>
                  <td>なし</td>
                  <td><a href="/category/programming/wp/">
                    <i class="fas fa-pencil-alt"></i></i>
                    <?php echo count(get_categories( array('include' => '18') )); ?>
                  </a></td>
                </tr>
                <tr>
                  <td>photoshop</td>
                  <td>★☆☆</td>
                  <td>なし</td>
                  <td><a href="/category/programming/ps/">
                    <i class="fas fa-pencil-alt"></i></i>
                    <?php echo count(get_categories( array('include' => '19') )); ?>
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



<?php get_sidebar();?>
<?php get_footer();?>