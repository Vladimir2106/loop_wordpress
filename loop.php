
<section>
	     <div class="box362">
			 <?php
			 global $post;
			 $myposts=get_posts([
				 'numberpost'=>-1,
			 ]);
			 if($myposts){
				 foreach($myposts as $post){
					 setup_postdata($post);
					 ?>
			    <div class="box351">
                <div>
                    <div class="box37" id="b6"><?php the_title(); ?></div>
                    <div class="box393"  id="b5"><?php the_content(); ?></div>
                </div>
                <div>
                    <div class="box361">
                        <img src=<?php the_post_thumbnail(array(250, 250), array('class'=>'box741'))?>>;
                    </div>
                </div> 
            </div>
			 <?php
				 }
			 }else{
			 echo 'карточек товара нет';
			 }
			 wp_reset_postdata();
			 ?>
         </div> 
</section>
