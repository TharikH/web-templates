import React from 'react';
import './App.css';
import Content from './content';
import Navbar from './Navbar';
import { BrowserRouter } from 'react-router-dom';



function App() {
  return (
    <React.Fragment>
      <BrowserRouter>
      <Content/>
      </BrowserRouter>
      {/* <Navbar /> */}
    </React.Fragment>
  );
}

export default App;
