import React, {Component} from 'react';
import Typist from 'react-typist';

export default class Type extends Component {

  render() {
    return (
        <Typist>
        <span> Come Join us </span>
        <Typist.Backspace count={8} delay={200} />
        <span> to make difference </span>
      </Typist>
    );
  }
}