<style>
  /* Styling dasar untuk mode terang */
  body {
    background-color: #ffffff;
    color: #000000;
    transition: background-color 0.3s, color 0.3s;
  }

  /* Styling saat kelas dark-mode aktif */
  body.dark-mode {
    background-color: #1a1a1a;
    color: #ffffff;
  }
</style>

<button id="theme-toggle">Ubah Tema</button>

<script>
  const toggleButton = document.getElementById('theme-toggle');
  const bodyElement = document.body;

  // Cek apakah pengguna sebelumnya sudah menyimpan preferensi tema
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme === 'dark') {
    bodyElement.classList.add('dark-mode');
  }

  // Fungsi saat tombol diklik
  toggleButton.addEventListener('click', () => {
    bodyElement.classList.toggle('dark-mode');
    
    // Simpan preferensi ke localStorage
    if (bodyElement.classList.contains('dark-mode')) {
      localStorage.setItem('theme', 'dark');
    } else {
      localStorage.setItem('theme', 'light');
    }
  });
</script>
