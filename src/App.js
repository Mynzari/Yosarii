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
      <PageHead title="Yosari Web" description="I want tacos wey"/>
      <h2>Pinche pendejo</h2>
      <h3>Qué</h3>
    </div>
  );
}

export default App;
