<?php   
    $section = $args['section'];
    $image_to_right = $args['image_to_right'];
?>

<style type="text/css">
.accordion-container {
    display: flex;
    gap:60px;
}

.accordion-column {
    width: 50%;
}
.accordion-column-full {
    width: 100%;
}
@media(max-width:600px) {
    .accordion-container {
        gap: 0px;
        flex-direction: column;
    }
    .accordion-column {
        width: 100%;
    }
}

 button.accordion {
  width: 100%;
  background-color: var(--color-primary);
  border: none;
  outline: none;
  text-align: left;
  padding: 15px 20px;
  font-size: 18px;
  color: var(--color-white);
  cursor: pointer;
  transition: background-color 0.2s linear;
}

button.accordion:after {
  font-family: FontAwesome;
  content: "\f150";
  font-family: "fontawesome";
  font-size: 18px;
  float: right;
}

button.accordion.is-open:after {
  content: "\f151";
}

button.accordion:hover,
button.accordion.is-open {
  background-color: var(--color-secondary);
}

.accordion-content {
  background-color: var(--color-white);
  border-left: 1px solid var(--color-primary);
  border-right: 1px solid var(--color-primary);
  padding: 0 20px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-in-out;
  margin-bottom: 20px;
}

</style>
<section class="regular-content section--plans" id="plans">
    <a class="regular-content__anchor" name="plans"></a>
    <div class="regular-content__wrap">

        <div class="regular-content__main">
            <div class="container">
                <div class="row">

                    <div class="col col-12 col--content p-0">
                        
                        <div class="col__wrap">
                            <h2><?php echo $section['title']; ?></h2>

                            <div class="content">
                                <?php echo $section['content']; ?>
                            </div>
                        </div>

                    </div>

                    <div class="col--gallery">
                        



                        <?php if($section['no_of_column'] == 2){
                             $totalRows = count($section['accordions_details']);
                             $halfItems = round($totalRows / 2);
                        ?>

                            <div class="accordion-container">                                
                                <div class="accordion-column">
                                    <?php $r=0; foreach( $section['accordions_details'] as $accordions_details ): ?>
                                    <?php if($accordions_details['title'] !=''){?>
                                          <button class="accordion"><?php echo $accordions_details['title']; ?></button>
                                          <div class="accordion-content">
                                            <p>
                                              <?php echo $accordions_details['details']; ?>
                                            </p>
                                          </div>
                                    <?php $r++; }?>
                                      <?php if($r == $halfItems){?> </div> <div class="accordion-column"><?php } ?>


                                    <?php  endforeach; ?>
                                </div>  
                            </div>
                                
                        <?php }else{?>

                            <div class="accordion-container">                                
                                <div class="accordion-column-full">
                                    <?php  foreach( $section['accordions_details'] as $accordions_details ): ?>

                                      <button class="accordion"><?php echo $accordions_details['title']; ?></button>
                                      <div class="accordion-content">
                                        <p>
                                          <?php echo $accordions_details['details']; ?>
                                        </p>
                                      </div>

                                      


                                    <?php  endforeach; ?>
                                </div>  
                            </div>

                        <?php }?>





                    </div>

                    <div class="col col-12 col--cta p-0">
                    <?php echo acf_button($section['button'], 'btn'); ?>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
</section>



<script type="text/javascript">
    //pseudocode
/*
  1.Grab the accordion buttons from the DOM
  2. go through each accordion button one by one
  3. Use the classlist dom method in combination with the toggle method provided by the DOM to add or remove the "is-open" class. At this point, the accordion button should be able to switch back and forth between its font awesome icons but there is no content inside of it. This is because of the overflow:hidden and the max-height of zero; it is hiding our content. So now we must use javascript to change these values with DOM CSS
  4. get the div that has the content of the accordion button you are currently looking at; we do this using the .nextElementSibling method which allows us to look at the html element that is directly next to the current html element we are looking at. Since we are currently looking at a button (accordion button), the next element after that is the div with the class accordion-content. This is exactly what we want because it allows us to work with the div that has the content that we want to display. Also please note that we could have got to this div in another way but this is the "shortest path" to our answer.
  
  5. set the max-height based on whether the current value of the max-height css property. If the max-height is currently 0 (if the page has just been visited for the first time) or null (if it has been toggled once already) which means that it is closed, you will give it an actual value so the content will be shown; if not then that means the max-height currently has a value and you can set it back to null to close it.
  6. If the accordion is closed we set the max-height of the currently hidden text inside the accordion from 0 to the scroll height of the content inside the accordion. The scroll height refers to the height of an html element in pixels. For this specific example, we are talking about the height of the div with the class accordion-content with all of its nested ptags
*/

const accordionBtns = document.querySelectorAll(".accordion");

accordionBtns.forEach((accordion) => {
  accordion.onclick = function () {
    this.classList.toggle("is-open");

    let content = this.nextElementSibling;
    console.log(content);

    if (content.style.maxHeight) {
      //this is if the accordion is open
      content.style.maxHeight = null;
    } else {
      //if the accordion is currently closed
      content.style.maxHeight = content.scrollHeight + "px";
      console.log(content.style.maxHeight);
    }
  };
});

</script>