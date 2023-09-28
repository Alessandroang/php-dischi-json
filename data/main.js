const { createApp } = Vue;

const app = createApp({
  data() {
    return {
      dischi: [], // Inizializza 'dischi' come un array vuoto
    };
  },
  mounted() {
    axios.get("./data/dischi.php").then((result) => {
      this.dischi = result.data;
    });
  },
});

app.mount("#app");
