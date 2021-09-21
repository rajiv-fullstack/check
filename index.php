
<!DOCTYPE html>
<html>
    <head>
        <title>
            Scroll - hide footer
        </title>
        <style>
            body
            {
                height: 100%;
                overflow: scroll;
                width:500px;
            }

            .stick
            {
                position: fixed;
                bottom: 0;
                height: 50px;
                width: 100%;
                padding:0;
                margin:0;
                background: orange;
                transition: opacity .25s ease-in-out;
            }
            .fadedAway { opacity:0; }
            .ci-ser { background: pink; }
            .big-scroll { height: 200%; }
        </style>
        <script>
            (window.onscroll = function(e) {
                const footer = document.querySelector(".stick"),
                    overs = [...document.querySelectorAll(".ci-ser")];
                footer.classList.toggle("fadedAway", overs.some(e => collides(footer, e)))
            })()
            function collides(el1, el2) {
                const rect1 = el1.getBoundingClientRect(),
                    rect2 = el2.getBoundingClientRect();
                return !(
                    rect1.top > rect2.bottom ||
                    rect1.right < rect2.left ||
                    rect1.bottom < rect2.top ||
                    rect1.left > rect2.right
                )
            }
        </script>
    </head>
    <body>
        <section class="big-scroll">
            <p>
                Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div
            </p>
            <p>
                Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div
            </p>
            <p>
                Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div
            </p>
            <p>
                Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div
            </p>
            <p>
                Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div
            </p>
            <p>
                Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div
            </p>
            <p>
                Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div
            </p>
            <p>
                Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div
            </p>
            <p class="ci-ser">
                Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div
            </p>
            <p>
                Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div Re: Hide fixed div when scrolling over another div
            </p>
        </section>
        <footer class="stick">
            footer
        </footer>
    </body>
</html>
