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
      <PageHead title="Yosari Web" description="Amandita"/>
      <h2>No sé cómo haré para dormir esta noche, pensando en todo lo que paso</h2>
    </div>
  );
}

export default App;
