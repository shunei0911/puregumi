let currentSlide = 0;
        const photo = document.getElementById('img-area');
        function changeSlide(index) {
            currentSlide = index;
            updateDots();
            // スライドの内容変更処理をここに実装
            if (currentSlide === 0) {
                photo.innerHTML = '<img style="height: 400px; width: 600px" src="./../images/Image1.jpg">';
            } else if (currentSlide === 1) {
                photo.innerHTML = '<img style="height: 400px; width: 600px" src="./../images/Image2.jpg">';
            } else if (currentSlide === 2) {
                photo.innerHTML = '<img style="height: 400px; width: 600px" src="./../images/Image3.jpg">';
            } else if (currentSlide === 3) {
                photo.innerHTML = '<img style="height: 400px; width: 600px" src="./../images/Image4.jpg">'
            } else if (currentSlide === 4) {
                photo.innerHTML = '<img style="height: 400px; width: 600px" src="./../images/Image5.jpg">';
            } else {
                photo.innerHTML = '<img style="height: 400px; width: 600px" src="./../images/Image1.jpg">';
            }
        }

        function updateDots() {
            const dots = document.querySelectorAll('.thumbnail-dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }

        function navigateTo(page) {
            window.location.href = page;
        }