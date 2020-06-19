import React from 'react';
import {Navbar, NavbarBrand} from 'reactstrap';
import { DISHES } from './share/Dishes';
import Menu from './components/Menu';
import './App.css';

class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      dishes: DISHES
    };
  }

  render(){
  return (
    <div>
      <Navbar dark color="primary">
        <div className="container">
          <NavbarBrand href="/">Legend</NavbarBrand>
        </div>
      </Navbar>
      <Menu dishes={this.state.dishes} />
    </div>
  );
}
}

export default App;
