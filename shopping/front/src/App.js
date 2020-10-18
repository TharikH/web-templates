import React from 'react';
import './App.css';
import Carousel from './components/Carousel';
import Navbar from './components/Navbar';
import {MDBContainer} from 'mdbreact';
import Jumbotron from './components/Jumbotron';
import Cart from './components/Cart';


function App() {
  return (
    <React.Fragment>
      <Navbar/>
      <MDBContainer fluid className="mt-3">
        <Carousel/>
        <Jumbotron/>
        <Jumbotron/>
        <Carousel/>
        <Jumbotron/>
        <Cart />
      </MDBContainer>

    </React.Fragment>
  );
}

export default App;
