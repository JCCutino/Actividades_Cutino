export default function Welcome(props) {
    return(
        <div>
            <h1>Bienvenido, soy un componente</h1>
            <p>Y tengo un props llamado user que toma el valor {props.user}</p>
        </div>
    );
};