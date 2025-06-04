<template>
  <div class="app">
    <h1>✈️ JetLux – Exklusive Privatjets</h1>
    <div class="jet-list">
      <JetCard v-for="jet in jets" :key="jet.name" :jet="jet" />
    </div>
  </div>
</template>

<script>
import JetCard from './components/JetCard.vue';

export default {
  components: { JetCard },
  data() {
    return { jets: [] };
  },
  mounted() {
    fetch('/backend/api/jets.php')
      .then(res => res.json())
      .then(data => this.jets = data);
  }
}
</script>

<style>
.app {
  font-family: sans-serif;
  text-align: center;
}
.jet-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
</style>
