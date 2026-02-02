document.addEventListener('DOMContentLoaded', function() {
    // 1. Confetti for "Congratulations" (kept as requested)
    const congratsHeader = document.querySelector('.jumbotron h1');
    if (congratsHeader) {
        let isConfettiActive = false;
        congratsHeader.addEventListener('mouseenter', function() {
            if (isConfettiActive) return;
            isConfettiActive = true;
            const colors = ['#a8dadc', '#ffb7b2', '#b39ddb', '#ffeaa7', '#2d3436'];
            const end = Date.now() + (1 * 1000);
            (function frame() {
                confetti({ particleCount: 5, angle: 60, spread: 55, origin: { x: 0, y: 0.8 }, colors: colors, scalar: 1.2, shapes: ['square'] });
                confetti({ particleCount: 5, angle: 120, spread: 55, origin: { x: 1, y: 0.8 }, colors: colors, scalar: 1.2, shapes: ['square'] });
                if (Date.now() < end) { requestAnimationFrame(frame); } else { isConfettiActive = false; }
            }());
        });
    }

    // 2. Distraction Explosion for "Get Started"
    const startButton = document.querySelector('.jumbotron .btn-success');
    if (startButton) {
        startButton.addEventListener('mouseenter', function(e) {
            triggerDistractionExplosion(e.clientX, e.clientY);
        });
    }

    function triggerDistractionExplosion(x, y) {
        const particles = 30;
        const colors = ['#a8dadc', '#ffb7b2', '#b39ddb', '#ffeaa7', '#2d3436', '#ff4757', '#2ed573'];
        const texts = ['BOOM!', 'POW!', 'BANG!', 'KABOOM!', 'ZAP!', 'WOW!', 'YII!'];

        // Shake the whole body
        document.body.classList.remove('shake');
        void document.body.offsetWidth; // Force reflow
        document.body.classList.add('shake');

        for (let i = 0; i < particles; i++) {
            const p = document.createElement('div');
            p.className = 'explosion-particle';
            
            const isText = Math.random() > 0.6;
            if (isText) {
                p.innerText = texts[Math.floor(Math.random() * texts.length)];
                p.style.fontSize = (Math.random() * 40 + 20) + 'px';
                p.style.color = colors[Math.floor(Math.random() * colors.length)];
                p.style.textShadow = '4px 4px 0 #000';
                p.style.zIndex = '10000';
            } else {
                const size = Math.random() * 80 + 20;
                p.style.width = size + 'px';
                p.style.height = size + 'px';
                p.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                p.style.border = '4px solid #000';
                p.style.boxShadow = '6px 6px 0 #000';
                if (Math.random() > 0.5) p.style.borderRadius = '50%';
            }

            p.style.left = x + 'px';
            p.style.top = y + 'px';
            
            const angle = Math.random() * Math.PI * 2;
            const velocity = Math.random() * 20 + 10;
            const vx = Math.cos(angle) * velocity;
            const vy = Math.sin(angle) * velocity;
            
            document.body.appendChild(p);
            
            let posX = x;
            let posY = y;
            let rotation = 0;
            const rotVel = (Math.random() - 0.5) * 30;
            let opacity = 1;
            let gravity = 0.5;
            let curVy = vy;

            const animate = () => {
                posX += vx;
                curVy += gravity;
                posY += curVy;
                rotation += rotVel;
                opacity -= 0.015;

                p.style.transform = `translate(${posX - x}px, ${posY - y}px) rotate(${rotation}deg)`;
                p.style.opacity = opacity;

                if (opacity > 0) {
                    requestAnimationFrame(animate);
                } else {
                    p.remove();
                }
            };

            requestAnimationFrame(animate);
        }
    }
});
