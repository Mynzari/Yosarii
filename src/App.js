import "./App.css";

function PageHead(elements) {
  return (
    <div>
      <h1>{elements.title}</h1>
      <p>{elements.description}</p>
    </div>
  );
}

function App() {
  return (
    <div>
      <PageHead title="Querida Amandita" description="No sé como dormiré hoy por la noche, no logro asimilar esto, ya las flores se secaron y los edificios se cayeron, nuestro amor ya no alimenta nuestro pequeño mundo que estabamos creando."/>
    </div>
  );
}

export default App;
