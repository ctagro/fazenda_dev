import logo from './logo.svg';
import './App.css';

import { BrowserRouter, Routes, Route } from 'react-router-dom';

import ShowProducts from './components/ShowProducts';

function App() {
  return (
    <div className="App">
     <BrowserRouter>
        <Routes>

          <Route path= '/' element={<ShowProducts />} />
           
        </Routes>
     </BrowserRouter>  
    </div>
  );
}

export default App;
