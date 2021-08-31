import {useState} from 'react';

export function Table(){

    const [selected, setSelected] = useState();

    return(

        <>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">System Access</th>
                    <th scope="col">Last Access</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Fulano</td>
                    <td>2</td>
                    <td>*****</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Beltrano</td>
                    <td>2</td>
                    <td>*****</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Ciclano</td>
                    <td>1</td>
                    <td>*****</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td>Cleiton</td>
                    <td>1</td>
                    <td>*****</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td>João</td>
                    <td>3</td>
                    <td>*****</td>
                    </tr>
                </tbody>
            </table>
        </>
    )
}