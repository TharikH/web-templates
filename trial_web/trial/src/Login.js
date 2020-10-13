import React from "react";
import './App.css';
import axios from 'axios';
import { MDBContainer, MDBRow, MDBCol, MDBInput, MDBBtn, MDBCard, MDBCardBody, MDBIcon } from 'mdbreact';

class Login extends React.Component {
  constructor(props){
    super(props);
    this.state={
      name:"",
      pass:"",
      email:"",
      conf_email:"",
    }
  }
  render() {
    return (
      <MDBContainer fluid>
        <MDBRow around>
          <MDBCol md="5" className="d-none d-lg-flex bg">
          </MDBCol>
          <MDBCol xl="4" justifyContent="center" className="pt-5 col-lg-6 col-12 col-md-8">
            <MDBCard className="z-depth-5 border-dark">
              <MDBCardBody className="p-5">
                <form onSubmit={this.valid}>
                  <p className="h2 bold text-center py-4">Sign up</p>
                  <div className="black-text">
                    <MDBInput
                      label="Your name"
                      icon="user"
                      group
                      type="text"
                      validate
                      error="wrong"
                      success="right"
                      onChange={this.handleChange}
                      name="name"
                    />
                    <MDBInput
                      label="Your email"
                      icon="envelope"
                      group
                      type="email"
                      validate
                      error="wrong"
                      success="right"
                      name="email"
                      onChange={this.handleChange}
                    />
                    <MDBInput
                      label="Confirm your email"
                      icon="exclamation-triangle"
                      group
                      type="text"
                      validate
                      error="wrong"
                      success="right"
                      name="conf_email"
                      onChange={this.handleChange}
                    />
                    <MDBInput
                      label="Your password"
                      icon="lock"
                      group
                      type="password"
                      validate
                      name="password"
                      onChange={this.handleChange}
                    />
                  </div>
                  <div className="text-center py-4 mt-3">
                    <MDBBtn className="btn btn-outline-black" type="submit">
                      Send
                    <MDBIcon far icon="paper-plane" className="ml-2" />
                    </MDBBtn>
                  </div>
                </form>
              </MDBCardBody>
            </MDBCard>
          </MDBCol>
        </MDBRow>
      </MDBContainer>
    );
  };
  handleChange=(eve)=>{
    this.setState({[eve.target.name]:eve.target.value});
  }
  valid = (event) => {
    event.preventDefault();
    axios.post("localhost:5000",this.state).then((res)=>{
      console.log(res);
    }).catch((err)=>{
      console.log("error");
    })
  }
}

export default Login;