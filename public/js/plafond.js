/**
 * Kurnia Plafond Sejahtera - Interactive Features, Cost Calculator & Theme Switcher
 */

// Immediate Theme Initialization (prevents flash of default theme)
(() => {
    const savedTheme = localStorage.getItem('kps_theme') || 'amber';
    if (savedTheme !== 'amber') {
        document.documentElement.setAttribute('data-theme', savedTheme);
    }
})();

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('show');
            const icon = hamburger.querySelector('i');
            if (icon) {
                if (navMenu.classList.contains('show')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                } else {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }
            }
        });

        // Close menu on link click
        navMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('show');
                const icon = hamburger.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }
            });
        });
    }

    // 2. Interactive Plafon & Partisi Calculator
    const calcType = document.getElementById('calcType');
    const calcPanjang = document.getElementById('calcPanjang');
    const calcLebar = document.getElementById('calcLebar');
    const optList = document.getElementById('optList');
    const optCat = document.getElementById('optCat');
    const optLampu = document.getElementById('optLampu');
    const lampuQty = document.getElementById('lampuQty');

    const resLuas = document.getElementById('resLuas');
    const resKeliling = document.getElementById('resKeliling');
    const resLayanan = document.getElementById('resLayanan');
    const resBiayaDasar = document.getElementById('resBiayaDasar');
    const resAddons = document.getElementById('resAddons');
    const resTotal = document.getElementById('resTotal');
    const btnSendWA = document.getElementById('btnSendWA');

    function calculateEstimate() {
        if (!calcType || !calcPanjang || !calcLebar) return;

        const panjang = parseFloat(calcPanjang.value) || 0;
        const lebar = parseFloat(calcLebar.value) || 0;
        const selectedOption = calcType.options[calcType.selectedIndex];
        const baseRate = parseFloat(selectedOption.getAttribute('data-rate')) || 0;
        const serviceName = selectedOption.text.split('(')[0].trim();

        const luas = Math.max(0, panjang * lebar);
        const keliling = Math.max(0, 2 * (panjang + lebar));

        const baseTotal = luas * baseRate;

        // Addons
        let addonsTotal = 0;
        let addonSummary = [];

        if (optList && optList.checked) {
            const listCost = keliling * 25000;
            addonsTotal += listCost;
            addonSummary.push(`List Profil Keliling (${keliling.toFixed(1)}m): Rp ${listCost.toLocaleString('id-ID')}`);
        }

        if (optCat && optCat.checked) {
            const catCost = luas * 20000;
            addonsTotal += catCost;
            addonSummary.push(`Finishing Cat Interior (${luas.toFixed(1)}m²): Rp ${catCost.toLocaleString('id-ID')}`);
        }

        if (optLampu && optLampu.checked) {
            const qty = parseInt(lampuQty ? lampuQty.value : 0) || 4;
            const lampuCost = qty * 35000;
            addonsTotal += lampuCost;
            addonSummary.push(`Instalasi Titik Downlight (${qty} titik): Rp ${lampuCost.toLocaleString('id-ID')}`);
        }

        const grandTotal = baseTotal + addonsTotal;

        // Render to UI
        if (resLuas) resLuas.textContent = `${luas.toFixed(1)} m²`;
        if (resKeliling) resKeliling.textContent = `${keliling.toFixed(1)} m`;
        if (resLayanan) resLayanan.textContent = serviceName;
        if (resBiayaDasar) resBiayaDasar.textContent = `Rp ${baseTotal.toLocaleString('id-ID')}`;
        if (resAddons) resAddons.textContent = `Rp ${addonsTotal.toLocaleString('id-ID')}`;
        if (resTotal) resTotal.textContent = `Rp ${grandTotal.toLocaleString('id-ID')}`;

        // Update WhatsApp Link
        if (btnSendWA) {
            const waPhone = '6285652244210';
            const msg = `Halo Kurnia Plafond Sejahtera,\nSaya ingin konsultasi/pesan berdasarkan estimasi kalkulator:\n\n` +
                `- Layanan: ${serviceName}\n` +
                `- Ukuran Ruangan: ${panjang}m x ${lebar}m (${luas.toFixed(1)} m²)\n` +
                `- Keliling: ${keliling.toFixed(1)} m\n` +
                `- Estimasi Biaya Pekerjaan: Rp ${grandTotal.toLocaleString('id-ID')}\n` +
                (addonSummary.length > 0 ? `- Tambahan: ${addonSummary.join(', ')}\n\n` : `\n`) +
                `Mohon info ketersediaan jadwal survey lokasi gratis ke alamat saya. Terima kasih.`;

            btnSendWA.href = `https://wa.me/${waPhone}?text=${encodeURIComponent(msg)}`;
        }
    }

    const calcInputs = [calcType, calcPanjang, calcLebar, optList, optCat, optLampu, lampuQty];
    calcInputs.forEach(input => {
        if (input) {
            input.addEventListener('input', calculateEstimate);
            input.addEventListener('change', calculateEstimate);
        }
    });

    // Run once on load
    calculateEstimate();

    // 3. Gallery Filter (All, Photos, Videos)
    const filterButtons = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item-wrap');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterButtons.forEach(b => {
                b.classList.remove('btn-gold');
                b.classList.add('btn-outline-secondary');
            });
            btn.classList.remove('btn-outline-secondary');
            btn.classList.add('btn-gold');

            const filter = btn.getAttribute('data-filter');
            galleryItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // 4. Dynamic Theme Switcher System
    function applyTheme(themeName) {
        if (themeName === 'amber') {
            document.documentElement.removeAttribute('data-theme');
        } else {
            document.documentElement.setAttribute('data-theme', themeName);
        }
        localStorage.setItem('kps_theme', themeName);

        // Update active class in dropdown items
        document.querySelectorAll('.theme-option').forEach(item => {
            if (item.getAttribute('data-theme') === themeName) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    }

    // Attach click events to theme buttons & options
    document.querySelectorAll('[data-theme-set]').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const targetTheme = btn.getAttribute('data-theme-set');
            applyTheme(targetTheme);
        });
    });

    document.querySelectorAll('.theme-option').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const targetTheme = btn.getAttribute('data-theme');
            applyTheme(targetTheme);
        });
    });

    // Initialize current active theme button in dropdown
    const currentTheme = localStorage.getItem('kps_theme') || 'amber';
    document.querySelectorAll('.theme-option').forEach(item => {
        if (item.getAttribute('data-theme') === currentTheme) {
            item.classList.add('active');
        }
    });
});
