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
    <p>"Por qué hay gente que se tuvo que intrometer en lo nuestro, me parece injusto que no dejen amar a una persona, me parece injusto que me arrebaten nuestras ilusiones y nuestros sueños."</p>
    </div>
  );
}

export default App;
