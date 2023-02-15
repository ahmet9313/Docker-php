<html>
    <head>
        <?php require_once "/workspace/api/basliq.php";?>
        <title>YokkiManga</title>
        <link rel="stylesheet" href="style/tasarimana.css">
    </head>
    <body>
        <?php require_once "/workspace/api/icbasliq.php";?>
        <div class="iceriq">
            <!-- Son Eklenenler
            Yeni Bölümü Çıkanlar
            Duyurular
            Ekip
            Sosyal Medya -->
            <div>
                <style>
                    #ilk, #iki, #üçü{
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        height:105%;
                        filter: blur(35px);
                        width: 105%;
                    }
                    #ilk{
                        background-image: url('mangacover/jalauy.jpg');
                    }
                    
                    #iki{
                        background-image: url('mangacover/jalauy2.jpg');
                    }
                    
                    #üçü{
                        background-image: url('mangacover/jalauy3.jpg');
                    }
                    #lalaydep{
                        transition: transform .3s ease-in-out;
                    }
                    #lalaydep:hover{
                        transform: scale(1.1);
                    }
                    #aciklamay{
                        -ms-overflow-style: none;
                        scrollbar-width: none;
                    }
                    #aciklamay::-webkit-scrollbar {
                        display: none;
                    }

                </style>
                <h2>Yeni bölümler!</h2>
                <div style="border-radius: 10px;overflow: hidden;display: flex;justify-content: space-between;">
                    <div style="position: relative;overflow:hidden;height:40em;width:50%;">
                        <div style="position: absolute;box-shadow:inset 0px 0px 220px black;height:100%;width:100%;z-index:4;padding:.5em 0;box-sizing: border-box;">
                            <!-- Burası başlık -->
                            <div style="font-weight: bolder;font-size:2em;color:white;width: 100%;max-height:4em;overflow:hidden;background-color: rgba(0, 0, 0, 0.466)">
                                <p style="padding-left:1em">Serial Killer Isekai'de uyandı </p>
                            </div>
                            <!-- Bunlar hep kategori linki olacak -->
                            <div style="display:flex;margin-top: .5em;margin-left: 2em;">
                                <p class="adanaoglu">PKK</p>
                                <p class="adanaoglu">Kürtler</p>
                                <p class="adanaoglu">Kadın</p>
                                <p class="adanaoglu">Lanet</p>
                                <p class="adanaoglu">Gore</p>
                                <p class="adanaoglu">Korku</p>
                            </div>
                            <div id="lalaydep"style="width: 230px;margin-top:2em;margin-left:auto;margin-right:auto;overflow:hidden;height:350px;">
                                <img id="lalay"style="height:100%;width: 100%;border-radius: 10px;" src="mangacover/jalauy.jpg" alt="">
                            </div>
                            <!-- Burası açıklama -->
                            <div id="aciklamay" style="background-color: rgba(0, 0, 0, 0.466);color:white;display:flex;justify-content:center;text-align:justify;font-size:0.8em;margin-top: 2em;padding:0 .6em;box-sizing: border-box;width: 100%;height: 19%;overflow-y:auto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat, magna convallis lobortis commodo, justo nibh sodales est, elementum porttitor libero lectus vitae urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non accumsan sapien. Fusce luctus vehicula arcu vitae pulvinar. Quisque consectetur dui sed elit sodales vehicula. Ut vel pellentesque ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam fringilla, ipsum sit amet tempus sodales, elit nulla euismod erat, at tristique libero magna in ante.

                                Morbi leo ipsum, pretium ac metus a, aliquam tristique diam. Vivamus et massa nec lectus pellentesque vestibulum non vitae risus. Mauris enim nunc, hendrerit eu vestibulum a, laoreet ac risus. Ut quis finibus ex. Duis finibus feugiat lacus, eget convallis ligula. Integer hendrerit magna commodo ligula molestie, at faucibus erat consequat. Sed convallis ante in justo dignissim malesuada. Donec tincidunt ex ut sapien efficitur vestibulum. Integer nec nibh vehicula, pretium felis ut, ullamcorper nisi. Quisque in orci sed dolor finibus imperdiet sit amet id ligula. Cras in pulvinar purus. Nam volutpat metus sed felis interdum, ut tincidunt tortor ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.


                            </div>
                        </div>
                        <div id="ilk" >
                        </div>
                    </div>
                    <div style="width:50%;height:40em;">
                        <div style="overflow:hidden;box-shadow:inset 0px 0px 220px black;height:50%;">
                            <div id="iki" >
                            </div>
                        </div>
                        <div style="overflow:hidden;box-shadow:inset 0px 0px 220px black;height:50%;">
                            <div id="üçü">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>