import logo from './logo.svg';
import './App.css';

import { BrowserRouter, Routes, Route } from 'react-router-dom';

import ShowPrice_ceasa_bhs from './components/ShowPrice_ceasa_bhs';

function App() {
  return (
    <div className="App">
     <BrowserRouter>
        <Routes>

          <Route path= '/' element={<ShowPrice_ceasa_bhs />} />
           
        </Routes>
     </BrowserRouter>  
    </div>
  );
}

export default App;
