<?php require '../AKY/app/views/layouts/header.php'; ?>

<h1 class="page-title">Exhibition Title</h1>

<div class="gallery-outer">
<button class="gallery-arrow left" onclick="prevImage()">&#8249;</button>
<button class="gallery-arrow right" onclick="nextImage()">&#8250;</button>

<div class="gallery-wrapper">
<div class="gallery-main">
<img id="mainImage" src="/arthienne/AKY/public/assets/images/placeholder-image.jpg">
</div>

<div class="gallery-thumbs">
<img src="/arthienne/AKY/public/assets/images/placeholder-image.jpg" onclick="setImage(0)">
<img src="/arthienne/AKY/public/assets/images/placeholder-image.jpg" onclick="setImage(1)">
<img src="/arthienne/AKY/public/assets/images/placeholder-image.jpg" onclick="setImage(2)">
<img src="/arthienne/AKY/public/assets/images/placeholder-image.jpg" onclick="setImage(3)">
</div>
</div>
</div>

<div class="exhibition-info">
<span class="tag">Artist Name</span>
<span class="tag">Exhibition Date</span>
</div>

<div class="description-box">
<p>
This exhibition presents a thoughtfully curated selection of works that explore material depth, surface variation, and compositional restraint through a refined artistic lens. Each piece reflects a careful balance between form and intention, inviting viewers into a slower and more deliberate visual experience.
</p>
<p>
Through layered techniques and subtle tonal shifts, the artist emphasizes continuity and rhythm, allowing each work to unfold gradually while maintaining a strong sense of cohesion across the exhibition. The dialogue between light, texture, and spatial awareness becomes central to the viewing experience.
</p>
<p>
Together, these works form a unified narrative that encourages close observation and sustained engagement, reinforcing the exhibition’s commitment to timeless craftsmanship and conceptual clarity.
</p>
</div>

<button class="btn-compact">Contact Artist</button>

<div class="palette-section">
<div class="palette-header">Related Works</div>

<div class="palette-outer">
<button class="palette-arrow left" onclick="slideLeft()">&#8249;</button>
<button class="palette-arrow right" onclick="slideRight()">&#8250;</button>

<div class="palette-wrapper">
<div class="palette-track" id="paletteTrack">
<?php for($i=0;$i<6;$i++): ?>
<div class="palette-item">
<img src="/arthienne/AKY/public/assets/images/placeholder-image.jpg">
<span>Artwork Title</span>
<button class="btn-compact">See Details</button>
</div>
<?php endfor; ?>
</div>
</div>
</div>
</div>

<script>
let currentIndex=0;
const thumbs=document.querySelectorAll('.gallery-thumbs img');
const mainImage=document.getElementById('mainImage');

function setImage(i){
currentIndex=i;
mainImage.src=thumbs[i].src;
}

function prevImage(){
currentIndex=(currentIndex-1+thumbs.length)%thumbs.length;
setImage(currentIndex);
}

function nextImage(){
currentIndex=(currentIndex+1)%thumbs.length;
setImage(currentIndex);
}

const track=document.getElementById('paletteTrack');
const items=document.querySelectorAll('.palette-item');
const itemWidth=items[0].offsetWidth+24;
let index=0;

function slideLeft(){
index--;
if(index<0){index=items.length-1;}
track.style.transform=`translateX(${-index*itemWidth}px)`;
}

function slideRight(){
index++;
if(index>=items.length){index=0;}
track.style.transform=`translateX(${-index*itemWidth}px)`;
}
</script>

<?php require '../AKY/app/views/layouts/footer.php'; ?>
