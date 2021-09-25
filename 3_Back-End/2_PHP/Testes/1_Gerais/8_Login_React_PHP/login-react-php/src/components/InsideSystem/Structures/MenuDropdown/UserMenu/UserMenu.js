// ==== Importação do componente de Link do roteamento, da lib de roteamento ==== //
import { Link } from 'react-router-dom';

// ==== Importação dos componentes do Material UI para o botão de ícone ==== //
import { makeStyles } from '@material-ui/styles';
import IconButton from '@material-ui/core/IconButton';
import UserIcon from '@material-ui/icons/AccountCircle';

// ==== Importação dos componentes do Material UI para o menu dropdown ==== //
// ==== https://material-ui.com/pt/components/menus/ ==== //
import React from 'react';
import ClickAwayListener from '@material-ui/core/ClickAwayListener';
import Grow from '@material-ui/core/Grow';
import Paper from '@material-ui/core/Paper';
import Popper from '@material-ui/core/Popper';
import MenuItem from '@material-ui/core/MenuItem';
import MenuList from '@material-ui/core/MenuList';

  const useStyles = makeStyles((theme) => ({
    root: {
      display: 'flex',
    },
    paper: {
      marginRight: theme.spacing(2),
    },
  }));

  export function UserMenu() {
    const classes = useStyles();
    const [open, setOpen] = React.useState(false);
    const anchorRef = React.useRef(null);
  
    const handleToggle = () => {
      setOpen((prevOpen) => !prevOpen);
    };
  
    const handleClose = (event) => {
      if (anchorRef.current && anchorRef.current.contains(event.target)) {
        return;
      }
  
      setOpen(false);
    };
  
    function handleListKeyDown(event) {
      if (event.key === 'Tab') {
        event.preventDefault();
        setOpen(false);
      }
    }
  
    // return focus to the button when we transitioned from !open -> open
    const prevOpen = React.useRef(open);
    React.useEffect(() => {
      if (prevOpen.current === true && open === false) {
        anchorRef.current.focus();
      }
  
      prevOpen.current = open;
    }, [open]);
  
    return (
      <div className={classes.root}>
        <div>
            <IconButton aria-label="settings-menu" style={{color: "#222"}} ref={anchorRef} aria-controls={open ? 'menu-list-grow' : undefined} aria-haspopup="true" onClick={handleToggle}>
              <UserIcon />
            </IconButton>
            <Popper open={open} anchorEl={anchorRef.current} role={undefined} transition disablePortal>
                {({ TransitionProps, placement }) => (
                <Grow {...TransitionProps} style={{ transformOrigin: placement === 'bottom' ? 'center top' : 'center bottom' }} >
                    <Paper>
                    <ClickAwayListener onClickAway={handleClose}>
                        <MenuList autoFocusItem={open} id="menu-list-grow" onKeyDown={handleListKeyDown}>
                          <MenuItem onClick={handleClose}>Minha conta</MenuItem>
                          <MenuItem onClick={handleClose}>Segurança</MenuItem>
                          <MenuItem onClick={handleClose}><Link to = "/"> Sair</Link></MenuItem>
                        </MenuList>
                    </ClickAwayListener>
                    </Paper>
                </Grow>
                )}
            </Popper>
        </div>
      </div>
    );
  }