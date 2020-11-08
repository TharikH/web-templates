import React, { Component } from "react";
import '../css/style.css';
import {
MDBNavbar, MDBNavbarBrand, MDBNavbarNav, MDBNavItem, MDBNavLink, MDBNavbarToggler, MDBCollapse, MDBFormInline,
MDBDropdown, MDBDropdownToggle, MDBDropdownMenu, MDBDropdownItem,MDBIcon,MDBBadge
} from "mdbreact";
import { BrowserRouter as Router } from 'react-router-dom';

class NavbarPage extends Component {
state = {
  isOpen: false
};

toggleCollapse = () => {
  this.setState({ isOpen: !this.state.isOpen });
}

render() {
  return (
    <Router>
      <MDBNavbar color="aqua-gradient" className="fixed-top mb-5" dark expand="md">
        <MDBNavbarBrand>
          <strong className="black-text">24x7 Shop</strong>
        </MDBNavbarBrand>
        <MDBNavbarToggler onClick={this.toggleCollapse} />
        <MDBCollapse id="navbarCollapse3" isOpen={this.state.isOpen} navbar>
          <MDBNavbarNav left >
            <MDBNavItem active>
              <MDBNavLink to="#!" className="black-text">Home</MDBNavLink>
            </MDBNavItem>
            <MDBNavItem>
              <MDBNavLink to="#!" className="black-text">Features</MDBNavLink>
            </MDBNavItem>
            <MDBNavItem>
              <MDBNavLink to="#!" className="black-text">Pricing</MDBNavLink>
            </MDBNavItem>
            <MDBNavItem>
              <MDBDropdown>
                <MDBDropdownToggle nav caret className="caret" color="elegant-color">
                  <span className="mr-2 black-text">More</span>
                </MDBDropdownToggle>
                <MDBDropdownMenu color="black">
                  <MDBDropdownItem href="#!">Action</MDBDropdownItem>
                  <MDBDropdownItem href="#!">Another Action</MDBDropdownItem>
                  <MDBDropdownItem href="#!">Something else here</MDBDropdownItem>
                  <MDBDropdownItem href="#!">Something else here</MDBDropdownItem>
                </MDBDropdownMenu>
              </MDBDropdown>
            </MDBNavItem>
          </MDBNavbarNav>
          <MDBNavbarNav right>
            <MDBNavItem>
              <MDBFormInline waves>
                <div className="md-form my-0 mt-1">
                  <input className="form-control mr-sm-2 black-text search"type="text" placeholder="Search" aria-label="Search" />
                </div>
              </MDBFormInline>
            </MDBNavItem>
            <MDBNavItem className="text-center mt-2 ml-3">
            
            <MDBNavLink to="#!" className="black-text"><MDBIcon icon="shopping-cart" size="2x"/><MDBBadge color="danger" className="">0</MDBBadge></MDBNavLink>
            </MDBNavItem>
          </MDBNavbarNav>
        </MDBCollapse>
      </MDBNavbar>
    </Router>
    );
  }
}

export default NavbarPage;