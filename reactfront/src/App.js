
import './App.css';

import { BrowserRouter, Routes, Route } from 'react-router-dom';

import ShowProducts from './components/ShowProducts';
// import CreateProduct from './components/CreateProduct';
// import EditProduct from './components/EditProduct';


function App() {
  return (
    <div className="App">
      <BrowserRouter>
       <Routes>
          <Route path= '/' element={ <ShowProducts /> } />

       </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
