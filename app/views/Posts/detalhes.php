<div class="container">
    <div id="detalhes">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $array = array('technics', 'sports', 'nature', 'cats', 'food', 'business', 'fashion');
                $link = "http://lorempixel.com/700/393/" . $array[rand(0, 6)];
                ?>
                <figure class="img-thumbnail">
                    <img src="<?php print $link ?>"  class="img-responsive"/>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1>Post com uma foto, isso sim!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 text-justify">
                <p class="lead">Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. Vestibulum sodales ante a purus volutpat euismod. Proin sodales quam nec ante sollicitudin lacinia. Ut egestas bibendum tempor. Morbi non nibh sit amet ligula blandit ullamcorper in nec risus. Pellentesque fringilla diam faucibus tortor bibendum vulputate. Etiam turpis urna, rhoncus et mattis ut, dapibus eu nunc. Nunc sed aliquet nisi. Nullam ut magna non lacus adipiscing volutpat. Aenean odio mauris, consectetur quis consequat quis, blandit a nunc. Sed orci erat, placerat ac interdum ut, suscipit eu augue. Nunc vitae mi tortor. Ut vel justo quis lectus elementum ullamcorper volutpat vel libero</p>
                <p class="lead">Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque adipiscing, neque ut pulvinar tincidunt, est sem euismod odio, eu ullamcorper turpis nisl sit amet velit. Nullam vitae nibh odio, non scelerisque nibh. Vestibulum ut est augue, in varius purus. Proin dictum lobortis justo at pretium. Nunc malesuada ante sit amet purus ornare pulvinar. Donec suscipit dignissim ipsum at euismod. Curabitur malesuada lorem sed metus adipiscing in vehicula quam commodo. Sed porttitor elementum elementum. Proin eu ligula eget leo consectetur sodales et non mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="lead">Duis dapibus fermentum orci, nec malesuada libero vehicula ut. Integer sodales, urna eget interdum eleifend, nulla nibh laoreet nisl, quis dignissim mauris dolor eget mi. Donec at mauris enim. Duis nisi tellus, adipiscing a convallis quis, tristique vitae risus. Nullam molestie gravida lobortis. Proin ut nibh quis felis auctor ornare. Cras ultricies, nibh at mollis faucibus, justo eros porttitor mi, quis auctor lectus arcu sit amet nunc. Vivamus gravida vehicula arcu, vitae vulputate augue lacinia faucibus.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3 col-md-2">
                <a href="#" class="thumbnail">
                    <img src="http://lorempixel.com/171/180/people/" alt="auto-post">
                </a>
            </div>
            <div class="col-md-6">
                <h3 id="nomeAuthor"><a href="autor/andreia-santos">Uelio Nobre</a></h3>
                <p class="text-justify">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                <p>Twitter: <a href="http://twitter.com/meuarroba">@meuarroba</a>
                    <br/>
                    Facebook: <a href="http://facebook.com/itandreia">@meufbarroba</a>
                    <br />
                    Intagram: <a href="http://instagram.com/meuarroba">@meuinstarroba</a>
                </p>
            </div>
        </div>
    </div>
</div>            