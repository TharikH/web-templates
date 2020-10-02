import React from 'react';
import axios from 'axios';
import './App.css';
class Hooks extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            postval: []
        }
    }
    componentDidMount() {
        axios.get('https://jsonplaceholder.typicode.com/posts')
            .then((response) => {
                this.setState({ postval: response.data });
                console.log(this.state.postval);
            })
    }
    render() {

        return (
            <div>
                <table>
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>title</td>
                        </tr>
                    </thead>
                    <tbody>
                        {this.state.postval.map((item, key) => {
                            return (
                                <tr>
                                    <td>{item.id}</td>
                                    <td>{item.title}</td>
                                </tr>
                            );
                        })
                        }
                    </tbody>
                    
                </table>
            </div>
        )
    }
}
export default Hooks;