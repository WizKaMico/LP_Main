function updateClock() {
  const now = new Date();

  // Format date
  const options = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
  };
  const dateStr = now.toLocaleDateString(undefined, options);

  // Format time
  let hours = now.getHours();
  const minutes = now.getMinutes().toString().padStart(2, "0");
  const seconds = now.getSeconds().toString().padStart(2, "0");
  const ampm = hours >= 12 ? "PM" : "AM";
  hours = hours % 12 || 12; // convert 24hr to 12hr format

  const timeStr = `${hours}:${minutes}:${seconds} ${ampm}`;

  document.getElementById("clock").innerHTML = `${dateStr} ${timeStr}`;
}

// Initial call
updateClock();

// Update every second
setInterval(updateClock, 1000);
