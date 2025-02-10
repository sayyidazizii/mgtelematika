// Contoh array data berita
const beritaData = [
    { image: 'gambar1.jpg', title: 'Judul Berita 1', date: '3 Februari 2025', description: 'Deskripsi berita 1', link: 'link-berita1.html' },
    { image: 'gambar2.jpg', title: 'Judul Berita 2', date: '2 Februari 2025', description: 'Deskripsi berita 2', link: 'link-berita2.html' },
    { image: 'gambar3.jpg', title: 'Judul Berita 3', date: '1 Februari 2025', description: 'Deskripsi berita 3', link: 'link-berita3.html' }
];

// Menampilkan berita secara dinamis
const container = document.querySelector('.container');
beritaData.forEach(berita => {
    const beritaElement = `
        <div class="berita-item">
            <img src="${berita.image}" alt="${berita.title}" class="img-fluid">
            <h3 class="berita-title">${berita.title}</h3>
            <p class="berita-date">Tanggal: ${berita.date}</p>
            <p class="berita-description">${berita.description}</p>
            <a href="${berita.link}" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
    `;
    container.innerHTML += beritaElement;
});

$(document).ready(function()
{

   
        if($('.bbb_slider').length)
        {
            var trendsSlider = $('.bbb_slider');
            trendsSlider.owlCarousel(
            {
                loop:false,
                margin:30,
                nav:false,
                dots:false,
                autoplayHoverPause:true,
                autoplay:false,
                responsive:
                {
                    0:{items:1},
                    575:{items:2},
                    991:{items:3}
                }
            });

            trendsSlider.on('click', '.bbb_fav', function (ev)
            {
                $(ev.target).toggleClass('active');
            });

            if($('.bbb_prev').length)
            {
                var prev = $('.bbb_prev');
                prev.on('click', function()
                {
                    trendsSlider.trigger('prev.owl.carousel');
                });
            }

            if($('.bbb_next').length)
            {
                var next = $('.bbb_next');
                next.on('click', function()
                {
                    trendsSlider.trigger('next.owl.carousel');
                });
            }
        }
    

    });