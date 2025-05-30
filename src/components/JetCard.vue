<template>
  <div class="card">
    <div class="image-container">
      <img :src="jet.image" :alt="jet.name" class="jet-image" />
    </div>

    <div class="content">
      <h2 class="jet-name">{{ jet.name }}</h2>
      <p><strong>Hersteller:</strong> {{ jet.manufacturer }}</p>
      <p><strong>Reichweite:</strong> {{ jet.range_km }} km</p>
      <p><strong>Geschwindigkeit:</strong> {{ jet.speed }} km/h</p>
      <p><strong>Kapazität:</strong> {{ jet.capacity }} person</p>
      <p><strong>Preis:</strong> {{ jet.price }} Mio. €</p>
      <div class="expandable">
        <h3>Vorteile</h3>
        <p>{{ jet.pros }}</p>
        <h3>Nachteile</h3>
        <p>{{ jet.cons }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['jet']
}
</script>

<style scoped>
.card {
  border: 1px solid #ccc;
  margin: 1rem;
  width: 100%; /* Changed from fixed width to 100% */
  max-width: 300px; /* Added max-width */
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  overflow: hidden;
  transition: all 0.3s ease;
}
.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 12px rgba(0,0,0,0.15);
}

.image-container {
  height: 200px;
  overflow: hidden;
}

.jet-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.card:hover .jet-image {
  transform: scale(1.05);
}

.content {
  padding: 1rem;
}

.jet-name {
  font-size: 1.4em;
  margin-bottom: 0.5rem;
  color: #333;
}

p {
  margin: 0.5rem 0;
  font-size: 0.9em;
  color: #666;
}

.expandable {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s ease;
}

.card:hover .expandable {
  max-height: 200px;
}

h3 {
  font-size: 1em;
  margin: 0.5rem 0;
  color: #333;
}

strong {
  color: #444;
}
</style>
