import React from 'react';
import './App.css';
import Carousel from './components/Carousel';
import Navbar from './components/Navbar';
import {MDBContainer} from 'mdbreact';
import Jumbotron from './components/Jumbotron';
import Cart from './components/Cart';
import axios from 'axios';


class App extends React.Component {
  constructor(){
    super();
    this.state={
      j1:[]
    }
  }
  
  componentDidMount() {
    axios.get('/total')
      .then(res => {
        var j1=res.data;
        this.setState({j1})
        console.log(j1)
      }).catch(err=>{
        console.log(err);
      });
  }
  render(){
  return (
    <React.Fragment>
      <Navbar/>
      <MDBContainer fluid className="mt-5 pt-2">
        <Carousel margin="mt-5"/>
        <Jumbotron val={this.state.j1}/>
        <Cart />
      </MDBContainer>

    </React.Fragment>
  );
  }
}

export default App;
