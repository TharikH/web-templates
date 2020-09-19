import React from 'react';
import NavbarPage from './NavbarPage';
import Login from './Login';
import Content from './content';
import './App.css';



function App() {
  return (
    <React.Fragment>
      <NavbarPage />
      < Content />
      {/* <Login/> */}
    </React.Fragment>
  );
}

export default App;
